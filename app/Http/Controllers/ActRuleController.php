<?php

namespace App\Http\Controllers;

use App\Models\ActRule;
use App\Models\Attachment;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActRuleController extends Controller
{
    public function index(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        return [
            'list' => $department->acts()->paginate(),
        ];
    }

    public function detail(Request $request, ActRule $model)
    {
        return [
            'data' => $model
        ];
    }

    public function download(Request $request, ActRule $model)
    {
        return [
            'data' => $model->attachment()->first(),
        ];
    }

    public function store(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }

        $model = $department->acts()->create(
            $request->only((new ActRule())->getFillable())
        );
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('acts', $file);
            $model->attachment()->create([
                    'mime' => $file->getMimeType(),
                    'original_name' => $file->getClientOriginalName(),
                    'label' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'path' => $path
                ]);
        }
        return [
            'list' => $department->acts()->paginate(),
            'data' => $model,
            'message' => 'Act & rules saved successfully',
        ];
    }

    public function update(Request $request, ActRule $model)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $model->update($request->only((new ActRule())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)
                ->put('notification', $file);
            $model->attachments()->create(['mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path]);
        }

        return [
            'list' => $department->notifications()->paginate(),
            'message' => 'Notification updated successfully'
        ];
    }

    public function destroy(Request $request, ActRule $model)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $model->delete();
        return [
            'list' => $department->acts()->paginate(),
            'message' => 'Act & Rules deleted successfully'
        ];
    }
}
