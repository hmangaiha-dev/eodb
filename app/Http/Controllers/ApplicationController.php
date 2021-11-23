<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationMovement;
use App\Models\ApplicationProfile;
use App\Utils\NumberGenerator;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function detail(Request $request,Application $application)
    {
        return $application;
    }
    public function submitApplication(Request $request)
    {
        $this->validate($request, [
            'application_code' => ['required'],
            'department_id' => ['required'],
            'fields' => ['required'],
        ]);
        $formFields = ($request->get('fields'));

        $appProfile = ApplicationProfile::query()
            ->where('code', $request->get('application_code'))
            ->where('published', true)
            ->first();

        $application = Application::query()->create([
            'application_code' => $request->get('application_code'),
            'regn_no' => NumberGenerator::fakeIdGenerator(),
            'application_profile_id'=>$appProfile->id,
            'fields' => $formFields,
            'user_id' => 1,
            'department_id' => $request->get('department_id'),
        ]);



        $flow = $appProfile->processFlows()
            ->orderBy('step')
            ->first();

        $movement = ApplicationMovement::query()->create([
            'application_id' => $application->id,
            'recipient' => $flow->staff_id,
            'step' => $flow->step,
        ]);
        return response()->json([
            'message' => 'Application submitted successfully'
        ], 200);
    }
}
