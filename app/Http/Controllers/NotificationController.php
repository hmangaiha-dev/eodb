<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Department;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    public function detail(Request $request,Notification $model)
    {
        return [
            'data' => $model
        ];
    }
    public function index(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $search = $request->get('search');
        return [
            'list' => $department->notifications()
                ->when($search,fn($q)=>$q->where('number','LIKE',"$search")->orWhere('subject','LIKE',"$search"))
                ->paginate(),
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
        $staff=auth()->user();
        $office=$staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $model=$department->notifications()->create($request->only((new Notification())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('notification', $file);
            $model->attachment()->create(['mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path]);
        }
        return [
            'list'=>$department->notifications()->paginate(),
            'data' => $model,
            'message' => 'Notification saved successfully',
        ];
    }

    public function update(Request $request, Notification $model)
    {
        $model->update($request->only((new Notification())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('notification', $file);
            $model->attachment()->create(['mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path]);
        }
        $staff=auth()->user();
        $office=$staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        return [
            'list' => $department->notifications()->paginate(),
            'message' =>'Notification updated successfully'
        ];
    }

    public function destroy(Request $request,Notification $model)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $model->delete();
        return [
            'list' => $department->notifications()->paginate(),
            'message' =>'Notification deleted successfully'
        ];
    }
}
