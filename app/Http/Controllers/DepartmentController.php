<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{



    public function showDepartment($slug)
    {
        $dept = Department::with(['applications'])->firstWhere('slug', $slug);
        return $dept;
    }


    public function show()
    {
        return Department::with('services')->get();
        // return DepartmentService::all();
        // return $dept;
    }
}
