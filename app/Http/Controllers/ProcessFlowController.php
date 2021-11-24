<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use App\Models\ProcessFlow;
use Illuminate\Http\Request;

class ProcessFlowController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'data' => ProcessFlow::query()->paginate(),
            'message' => ''
        ]);
    }

    public function store(Request $request)
    {
        $flows = $request->get('flows');

        $application = ApplicationProfile::query()->find($request->get('application_id'));
        $application->processFlows()->delete();
        $application->published = $request->get('published');
        $application->save();
        foreach ($flows as $index=>$flow) {
            $staff = $flow['staff']['value'];
            $flow=new ProcessFlow([
                'step'=>$index,
                'duration' => $flow['duration'],
                'staff_id'=>$staff,
                'actions'=>json_encode($flow['actions']),
            ]);
            $flow->applicationProfile()->associate($application);
            $flow->save();
        }
        return response()->json([
            'message'=>'Process flow created successfully',
            'list' => ProcessFlow::query()->paginate(),
        ],200);
    }

    public function destroy(Request $request,ProcessFlow $flow)
    {
        $flow->delete();
        return response()->json([
            'message' => 'Process flow deleted successfully',
            'list' => ProcessFlow::query()->paginate(),
        ],200);
    }
}
