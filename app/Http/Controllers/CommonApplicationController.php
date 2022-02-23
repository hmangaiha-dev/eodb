<?php

namespace App\Http\Controllers;

use App\Models\PartA;
use App\Models\PartB;
use App\Models\PartC;
use App\Models\PartD;
use App\Models\PartE;
use App\Models\PartF;
use App\Models\PartG;
use App\Models\SelfDeclaration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonApplicationController extends Controller
{
    public function getCommonApplication()
    {
        // return 'common';
        return Auth::user()->commonApplications()
            ->with(
                ['partA', 'partB', 'partC', 'partD', 'partE', 'partF', 'partG', 'selfDeclaration']
            )->first();
    }

    public function store(Request $request)
    {
        // return $request->file();

        $common = Auth::user()->commonApplications()->firstOrCreate(
            [
                'user_id' => Auth::id()
            ],
            [
                'status' => 'filling',
            ]
        );


        $model = [];

        switch ($request->model) {
            case ('A'):
                $model = $common->partA()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartA())->getFillable()),

                );
                break;

            case ('B'):
                $model = $common->partB()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartB())->getFillable()),

                );
                break;

            case ('C'):
                $model = $common->partC()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartC())->getFillable()),

                );
                break;
            case ('D'):
                $model = $common->partD()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartD())->getFillable()),

                );
                break;
            case ('E'):
                $model = $common->partE()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartE())->getFillable()),

                );
                break;
            case ('F'):
                $model = $common->partF()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartF())->getFillable()),

                );
                break;
            case ('G'):
                $model = $common->partG()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartG())->getFillable()),

                );
                break;
            case ('declaration'):
                $model = $common->selfDeclaration()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new SelfDeclaration())->getFillable()),

                );
                break;
        }

        foreach ($request->file() as $key => $file) {
            $filePath = $file->store('common');
            $model->$key = $filePath;
        }

        $model->save();
    }
}
