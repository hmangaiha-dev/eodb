<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
   


    public function showDepartment($slug)
    {
        $dept = Department::with(['applications'])->firstWhere('slug',$slug);
        return $dept;
    }
}
