<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\KeyBank;
use App\Models\User;
use App\Models\UserApplication;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    public function store(Request $request)
    {
        

        $dept = Department::with(['applications' => function($q) {
            $q->where('code','ALLOTMENT_PLOT');
        }])->where('dept_code','C&E')->first();

        // $dept = Department::with('applications')->where('dept_code','C&E')->whereHas('applications', function ($query) {
        //     return $query->where('code','ALLOTMENT_PLOT');
        // })->first();
        // return User
        return $dept;


        foreach($request->keybanks as $keybank) {
            $user_app = new UserApplication() ;
            $user_app->key_id = $keybank->id;
            $user_app->user_id = 1;
            $user_app->key_field = $keybank->key_name;

            $user_app->save();

        }



    //    KeyBank::create

        
    }
}
