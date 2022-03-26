<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonApplicationController extends Controller
{
    public function getCommonApplication()
    {
        // return 'common';
        return Auth::user()->commonApplications()->with('partA')->first();
    }

    public function store(Request $request)
    {
        Auth::user()->commonApplications()->partA()->updateOrCreate([$request->all(),$request->all()]);
    }
}
