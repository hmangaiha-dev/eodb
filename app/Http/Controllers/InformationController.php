<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Department;
use App\Models\Notification;
use App\Models\OtherInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    public function detail(Request $request, OtherInformation $model)
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
            'list' => $department->with('otherInformations', fn ($q) => $q->with('attachment')->when($search, fn ($q) => $q->where('title', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%"))->get())->paginate(),
            'role' => $staff->hasRole('admin')
        ];


        // $staff = auth()->user();
        // $office = $staff->currentPost();

        // $department = Department::query()->where('dept_code', $office->code)
        //     ->first();
        // if (blank($department)) {
        //     abort(500, 'No posting found');
        // }
        // $search = $request->get('search');
        // return [
        //     'list' => $department->otherInformations()->with('attachment')
        //         ->when($search, fn ($q) => $q->where('number', 'LIKE', "$search")->orWhere('subject', 'LIKE', "$search"))
        //         ->paginate(),
        // ];
    }

    public function departmentOther(Request $request, string $code)
    {
        $department = Department::query()->where('slug', $code)->first();

        abort_if(blank($department), 400, 'No department found');

        return [
            'list' => $department->otherInformations()->with('attachment')->paginate(),
        ];
    }


    public function download(Request $request, OtherInformation $model)
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
        $other = [];
        $other = $model->when(isset($office), function ($q) use ($office, $request, $model, $other) {
            $model = $q->where('dept_code', $office->code)->first();
            return $model->otherInformations()->create(
                $request->only((new OtherInformation())->getFillable())
            );
        }, function ($q) use ($request, $model, $office) {
            $model = $q->where('dept_code', $request->code)->first();
            return $model->otherInformations()->create(
                $request->only((new OtherInformation())->getFillable())
            );
        });
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('notification', $file);
            $other->attachment()->create([
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
            'list' => $department->with('otherInformations', fn ($q) => $q->with('attachment')
                // ->when($search, fn ($q) => $q->where('number', 'LIKE', "$search")->orWhere('subject', 'LIKE', "$search"))
                ->get())->paginate(),

            'message' => 'Other information saved successfully',
            'role' => $staff->hasRole('admin')
        ];

        // $staff = auth()->user();
        // $office = $staff->currentPost();

        // $department = Department::query()->where('dept_code', $office->code)
        //     ->first();
        // abort_if(blank($department), 400, "No posting found");

        // $model = $department->otherInformations()->create($request->only((new OtherInformation())->getFillable()));
        // if ($request->hasFile('attachment')) {
        //     $file = $request->file('attachment');
        //     $path = Storage::disk(Attachment::DISK)->put('other', $file);
        //     $model->attachment()->create([
        //         'mime' => $file->getMimeType(),
        //         'original_name' => $file->getClientOriginalName(),
        //         'label' => $file->getClientOriginalName(),
        //         'size' => $file->getSize(),
        //         'path' => $path
        //     ]);
        // }
        // return [
        //     'list' => $department?->otherInformations()->with('attachment')?->paginate(),
        //     'data' => $model,
        //     'message' => 'Other information saved successfully',
        // ];
    }


    public function update(OtherInformation $model, Request $request)
    {

        $staff = auth()->user();
        $office = $staff->currentPost();
        if (!blank($office))
            abort_if($office->id != $model->department_id, 400, 'Insufficient permision!');


        $model->update($request->only((new OtherInformation())->getFillable()));
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
        $department = Department::query();
        $department->when(isset($office), function ($q) use ($office) {
            return $q->where('dept_code', $office->code);
        });

        return [
            'list' => $department->with('otherInformations', fn ($q) => $q->with('attachment')
                // ->when($search, fn ($q) => $q->where('number', 'LIKE', "$search")->orWhere('subject', 'LIKE', "$search"))
                ->get())->paginate(),
            'message' => 'Notification updated successfully',
            'role' => $staff->hasRole('admin')
        ];


        // $staff = auth()->user();
        // $office = $staff->currentPost();

        // $department = Department::query()->where('dept_code', $office->code)
        //     ->first();
        // if (blank($department)) {
        //     abort(500, 'No posting found');
        // }
        // $model->update($request->only((new OtherInformation())->getFillable()));
        // if ($request->hasFile('attachment')) {
        //     $file = $request->file('attachment');
        //     $path = Storage::disk(Attachment::DISK)
        //         ->put('other', $file);
        //     $model->attachment()->update([
        //         'mime' => $file->getMimeType(),
        //         'original_name' => $file->getClientOriginalName(),
        //         'label' => $file->getClientOriginalName(),
        //         'size' => $file->getSize(),
        //         'path' => $path
        //     ]);
        // }

        // return [
        //     'list' => $department->otherInformations()->with('attachment')->paginate(),
        //     'message' => 'Notification updated successfully'
        // ];
    }

    public function destroy(Request $request, OtherInformation $model)
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
            'list' => $department->with('otherInformations', fn ($q) => $q->with('attachment')
                ->get())->paginate(),
                'message' => 'Other information deleted successfully'
        ];

        
        // $staff = auth()->user();
        // $office = $staff->currentPost();

        // $department = Department::query()->where('dept_code', $office->code)
        //     ->first();
        // abort_if(blank($department), 400, 'No posting found');

        // $model->delete();



        // $file = $model->attachment()->first()->path;

        // Storage::delete($file);
        // return [
        //     'list' => $department->otherInformations()->with('attachment')->paginate(),
        //     'message' => 'Other information deleted successfully'
        // ];
    }
}
