<?php

namespace App\Http\Controllers;

use App\Models\PartA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonApplicationController extends Controller
{
    public function getCommonApplication()
    {
        // return 'common';
        return Auth::user()->commonApplications()->with('partA')->first();
        // $parta = Auth::user()->commonApplications()->with('partA')->first();


    }

    public function store(Request $request)
    {

        $partA = Auth::user()->commonApplications()->first()->partA()->updateOrCreate(
            [
                'common_id' => $request->common_id,
            ],

            $request->only((new PartA())->getFillable()),

        );

        foreach ($request->file() as $key => $file) {
            $filePath = $file->store('common');
            $partA->$key = $filePath;
        }



        $partA->save();
    }
}
