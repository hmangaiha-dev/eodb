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
        // // return count($request->din_attach);
        // return $request->file();
        // return (json_decode($request->emissionDetails));
        // return $request->file("din_attach[0]['qualification']")->store('ijhkhn');
        // $file =  $request->file('din_attach')[0]['qualification'];
        // return $file;
        // return $request->file("din_attach[0]['qualification']")->store('ijhkhn');
        // return (($request->din_attach));
        // return $request->has('din_attach') ? 'has' : 'not';

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

                // return $model;

                $model->when(count(($request->din_attach)) > 0, function ($q) use ($request, $model) {
                    // $q->dinDetails()->createMany($request->get('dinDetails'));
                    foreach ($request->din_attach as $key => $arr) {
                        // $file = $request->file('din_attach')[$key]['qualification']->store('dinDetails');
                        $file = isset(($request->file('din_attach')[$key]['qualification'])) ? true : false;
                        $detail = $model->dinDetails()->updateOrcreate([
                            'id' => $request->din_attach[$key]['id'],
                        ], [
                            'number' => $request->din_attach[$key]['number'],
                            // 'qualification' => $file,
                            'association_year' => $request->din_attach[$key]['association_year'],
                            'experience_year' => $request->din_attach[$key]['experience_year'],
                        ]);

                        $model->when($file,function($q) use($detail,$request,$key) {
                            $detail->update([
                                'qualification' => $request->file('din_attach')[$key]['qualification']->store('dinDetails')
                            ]);
                        });
                        
                        // $request->din_attach[$key]['attach']->store('din');
                    }
                });

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

                $model->when(count(json_decode($request->fciDetails)) > 0, function ($q) use ($request, $model) {
                    $arrs =  (json_decode($request->fciDetails));
                    foreach ($arrs as $arr) {
                        $model->fciDetails()->updateOrcreate(
                            [
                                'id' => $arr->id,
                            ],
                            (array) $arr

                        );
                    }
                });

                break;
            case ('F'):
                $model = $common->partF()->updateOrCreate(
                    [
                        'common_id' => $common->id,
                    ],

                    $request->only((new PartF())->getFillable()),

                );

                $model->when(count(json_decode($request->manufactureDetails)) > 0, function ($q) use ($request, $model) {
                    $arrs =  (json_decode($request->manufactureDetails));
                    foreach ($arrs as $arr) {
                        $model->manufactureDetails()->updateOrcreate(
                            [
                                'id' => $arr->id,
                            ],
                            (array) $arr

                        );
                    }
                });
                $model->when(count(json_decode($request->emissionDetails)) > 0, function ($q) use ($request, $model) {
                    $arrs =  (json_decode($request->emissionDetails));
                    foreach ($arrs as $arr) {
                        $model->emissionDetails()->updateOrcreate(
                            [
                                'id' => $arr->id,
                            ],
                            (array) $arr

                        );
                    }
                });

                $model->when(count(json_decode($request->solidWasteDetails)) > 0, function ($q) use ($request, $model) {
                    $arrs =  (json_decode($request->solidWasteDetails));
                    foreach ($arrs as $arr) {
                        $model->solidWasteDetails()->updateOrcreate(
                            [
                                'id' => $arr->id,
                            ],
                            (array) $arr

                        );
                    }
                });
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
            // $check = $file . 'is'. is_array($file).'\n';
            if (!is_array($file)) {
                $filePath = $file->store('common');
                $model->$key = $filePath;
            }
        }
        $model->save();
    }
}
