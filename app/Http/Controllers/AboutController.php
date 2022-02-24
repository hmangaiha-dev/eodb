<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();

        // return $staff->hasRole('admin')

        $dept = Department::query();

        // abort_if(blank($office), 400, 'No office found');
        // $data = Department::query()->where('dept_code', $office->code)
        //     ->first();

        $dept->when(isset($office), function ($q) use ($office) {
            return $q->where('dept_code', $office->code);
        });
        return [
            'data' => $dept->with('about')->paginate(),
            'role' => $staff->hasRole('admin')
        ];








        $staff = auth('sanctum')->user();
        //return $staff->tokenCan('office:read') ? 'yes' : 'no';
        $service = DepartmentService::query()->orderBy('department_id');
        $service->when(isset($staff->currentPost()->pivot->office_id), function ($q) use ($staff) {
            return $q->where('department_id', $staff->currentPost()->pivot->office_id);
        });

        $data = $service->paginate();
        return [
            'list' => $data,
        ];
    }

    public function updateAbout(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();
        // abort_if(blank($office), 400, 'No office found');



        $department = Department::query()->when($request->code, function ($q) use($request) {
            return $q->where('dept_code',$request->code)->first();
        }, function ($q) use ($office) {
            return $q->where('dept_code', $office->code)->first();
        });






        // $department = Department::query()->where('dept_code', $office->code)->first();
        $department->about()?->updateOrCreate([
            'model_id' => $department->id
        ], ['content' => $request->get('content')]);
        
        
        return [
            'data' => $department?->about()->first(),
            'message' => 'Content of About Us updated successfully'
        ];
    }

    public function departmentAbout(Request $request, string $code)
    {
        $department = Department::query()->where('slug', $code)->first();
        abort_if(blank($department), 400, 'Error:No department found');
        return [
            'data' => $department->about()->first(),
        ];
    }
}
