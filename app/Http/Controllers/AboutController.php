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

        abort_if(blank($office), 400, 'No office found');
        $data = Department::query()->where('dept_code', $office->code)
            ->first();
        return [
            'data' => $data->about()?->first(),
        ];
    }

    public function updateAbout(Request $request)
    {
        $staff = auth()->user();
        $office = $staff->currentPost();
        abort_if(blank($office), 400, 'No office found');

        $department = Department::query()->where('dept_code', $office->code)->first();
        $department->about()?->updateOrCreate(['content' => $request->get('content')]);
        return [
            'data' => $department?->about()->first(),
            'message' => 'Content of About Us updated successfully'
        ];
    }

    public function departmentAbout(Request $request, string $code)
    {
        $department=Department::query()->where('slug', $code)->first();
        abort_if(blank($department),400,'Error:No department found');
        return [
            'data' => $department->about()->first(),
        ];
    }
}
