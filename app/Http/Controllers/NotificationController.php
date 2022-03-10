<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Department;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    public function detail(Request $request, Notification $model)
    {
        return [
            'data' => $model
        ];
    }
    public function index(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query();
        $department->when(!blank($office), function ($q) use ($office) {
            return $q->where('dept_code', $office->code)->first();
        })->first();

        $search = $request->get('search');
        return [
            'list' => $department->with('notifications', fn ($q) => $q->with('attachment')->when($search, fn ($q) => $q->where('number', 'LIKE', "%{$search}%")->orWhere('subject', 'LIKE', "%{$search}%"))->get())->paginate(),
            'role' => $staff->hasRole('admin')
        ];
    }


    public function departmentNotification(Request $request, string $code)
    {
        $department = Department::query()->where('slug', $code)->first();


        abort_if(blank($department), 400, 'No department found');

        return [
            'list' => $department->notifications()->with('attachment')->paginate(),
        ];
    }

    public function download(Request $request, Notification $model)
    {
        return [
            'data' => $model->attachment()->first(),
        ];
    }

    public function store(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();
        
        $model = Department::query();
        $notification = [];
        $notification = $model->when(isset($office), function ($q) use ($office, $request, $model, $notification) {
            $model = $q->where('dept_code', $office->code)->first();
            return $model->notifications()->create(
                $request->only((new Notification())->getFillable())
            );
        }, function ($q) use ($request, $model, $office) {
            $model = $q->where('dept_code', $request->code)->first();
            return $model->notifications()->create(
                $request->only((new Notification())->getFillable())
            );
        });
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('notification', $file);
            $notification->attachment()->create([
                'mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path
            ]);
        }

        $department = Department::query();
        $department->when(isset($office), function ($q) use ($office) {
            return $q->where('dept_code', $office->code);
        });

        return [
            'list' => $department->with('notifications', fn ($q) => $q->with('attachment')
                // ->when($search, fn ($q) => $q->where('number', 'LIKE', "$search")->orWhere('subject', 'LIKE', "$search"))
                ->get())->paginate(),
            'role' => $staff->hasRole('admin')
        ];
    }

    public function update(Request $request, Notification $model)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();
        if (!blank($office))
            abort_if($office->id != $model->department_id, 400, 'Insufficient permision!');
        $model->update($request->only((new Notification())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('notification', $file);
            $model->attachment()->update([
                'mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path
            ]);
        }
        $staff = auth()->user();
        $office = $staff->currentPost();



        $department = Department::query();
        $department->when(isset($office), function ($q) use ($office) {
            return $q->where('dept_code', $office->code);
        });

        return [
            'list' => $department->with('notifications', fn ($q) => $q->with('attachment')
                // ->when($search, fn ($q) => $q->where('number', 'LIKE', "$search")->orWhere('subject', 'LIKE', "$search"))
                ->get())->paginate(),
            'role' => $staff->hasRole('admin')
        ];
    }

    public function destroy(Request $request, Notification $model)
    {

        $staff = auth()->user();
        $office = $staff->currentPost();
        if (!blank($office))
            abort_if($office->id != $model->department_id, 400, 'Insufficient permision!');

        $department = Department::query();
        $department->when((isset($office) || auth()->user()->hasRole('admin')), function ($q) use ($office, $model) {
            return $model->delete();
        }, function () {
            abort(500, 'No posting found');
        });

        $file = $model->attachment()->first()->path;

        Storage::delete($file); 

        return [
            'list' => $department->with('notifications', fn ($q) => $q->with('attachment')
                ->get())->paginate(),
            'message' => 'Act & Rules deleted successfully'
        ];
    }
}
