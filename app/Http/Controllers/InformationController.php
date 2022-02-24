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

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $search = $request->get('search');
        return [
            'list' => $department->otherInformations()->with('attachment')
                ->when($search, fn ($q) => $q->where('number', 'LIKE', "$search")->orWhere('subject', 'LIKE', "$search"))
                ->paginate(),
        ];
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

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        abort_if(blank($department), 400, "No posting found");

        $model = $department->otherInformations()->create($request->only((new OtherInformation())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('other', $file);
            $model->attachment()->create([
                'mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path
            ]);
        }
        return [
            'list' => $department?->otherInformations()->with('attachment')?->paginate(),
            'data' => $model,
            'message' => 'Other information saved successfully',
        ];
    }


    public function update(OtherInformation $model, Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        if (blank($department)) {
            abort(500, 'No posting found');
        }
        $model->update($request->only((new OtherInformation())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)
                ->put('other', $file);
            $model->attachment()->update([
                'mime' => $file->getMimeType(),
                'original_name' => $file->getClientOriginalName(),
                'label' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'path' => $path
            ]);
        }

        return [
            'list' => $department->otherInformations()->with('attachment')->paginate(),
            'message' => 'Notification updated successfully'
        ];
    }

    public function destroy(Request $request, OtherInformation $model)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query()->where('dept_code', $office->code)
            ->first();
        abort_if(blank($department), 400, 'No posting found');

        $model->delete();



        $file = $model->attachment()->first()->path;

        Storage::delete($file);
        return [
            'list' => $department->otherInformations()->with('attachment')->paginate(),
            'message' => 'Other information deleted successfully'
        ];
    }
}
