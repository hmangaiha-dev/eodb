<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use App\Models\Department;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(ApplicationProfile::query()->get());
    }

    public function getServices(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();


        $department=Department::query()->where('dept_code', $office->code)
            ->first();
        $services=$department->services()->get();

        return [
            'list' => $services,
        ];
    }

    public function about(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $data=Department::query()->where('dept_code', $office->code)
            ->pluck('about_us');
        return [
            'data' => $data,
        ];
    }
    public function updateAbout(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $data = Department::query()->where('dept_code', $office->code)->first();
        $data->about_us = $request->get('content');
        $data->save();
        return [
            'data' => $data,
            'message'=>'Content of About us updated successfully'
        ];
    }

    public function actRules(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $data=Department::query()->where('dept_code', $office->code)
            ->pluck('act_rules');
        return [
            'data' => $data,
        ];
    }
    public function updateRules(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $data = Department::query()->where('dept_code', $office->code)->first();
        $data->act_rules = $request->get('content');
        $data->save();
        return [
            'data' => $data,
            'message'=>'Act & rules updated successfully'
        ];
    }

    public function notifications(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $info=Department::query()->where('dept_code', $office->code)
            ->pluck('info');
        return [
            'data' => $info,
        ];
    }
    public function updateNotifications(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $info = Department::query()->where('dept_code', $office->code)
            ->first();
        $info->info = $request->get('content');
        return [
            'data' => $info,
            'message'=>'Notification updated successfully'
        ];
    }

    public function otherInformations(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $info = Department::query()->where('dept_code', $office->code)
            ->first();
        return [
            'data' => $info,
        ];
    }
    public function updateOtherInformation(Request $request)
    {
        $staff=auth()->user();
        $office=$staff->currentPost();

        $data  = Department::query()->where('dept_code', $office->code)
            ->first();
        $data->other_info = $request->get('content');

        return [
            'data' => $data,
        ];
    }
}
