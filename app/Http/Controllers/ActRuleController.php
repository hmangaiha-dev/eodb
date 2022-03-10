<?php

namespace App\Http\Controllers;

use App\Models\ActRule;
use App\Models\Attachment;
use App\Models\Department;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActRuleController extends Controller
{
    public function index(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        $department = Department::query();

        $department->when(isset($office), function ($q) use ($office) {
            return $q->where('dept_code', $office->code)->first();
        });

        $search = $request->get('search');

        return [
            'list' => $department->with('acts', fn ($q) => $q->with('attachment')->when($search, fn ($q) => $q->where('name', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%"))->get())->paginate(),
            'role' => $staff->hasRole('admin')
        ];
    }

    public function departmentAct(Request $request, string $code)
    {
        $department = Department::query()->where('slug', $code)->first();

        abort_if(blank($department), 400, 'No department found');

        return [
            'list' => $department->acts()->with('attachment')->paginate(),
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
        $model = Department::query();

        $act = [];

        $act = $model->when(isset($office), function ($q) use ($office, $request, $model,$act) {
            $model = $q->where('dept_code', $office->code)->first();
            return $model->acts()->create(
                $request->only((new ActRule())->getFillable())
            );
            
        }, function ($q) use ($request, $model, $office,$act) {
            $model = $q->where('dept_code', $request->code)->first();
            return $model->acts()->create(
                $request->only((new ActRule())->getFillable())
            );
        });

        // return $act;

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('acts', $file);
            $act->attachment()->create([
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
            'list' => $department->with('acts', fn ($q) => $q->with('attachment'))->paginate(),
            'message' => 'Act rule updated successfully'
        ];
    }

    public function update(ActRule $model, Request $request)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        if (!blank($office))
            abort_if($office->id != $model->department_id, 400, 'Insufficient permision!');

        $model->update($request->only((new ActRule())->getFillable()));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)
                ->put('acts', $file);
            $model->attachment()->updateOrCreate([
                'owner_id' => $model->id
            ], [
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
            'list' => $department->with('acts', fn ($q) => $q->with('attachment'))->paginate(),
            'message' => 'Act rule updated successfully'
        ];
    }

    public function destroy(Request $request, ActRule $model)
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
            'list' => $department->with('acts', fn ($q) => $q->with('attachment')->get())->paginate(),
            'message' => 'Act & Rules deleted successfully'
        ];
    }
}
