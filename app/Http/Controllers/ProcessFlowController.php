<?php

namespace App\Http\Controllers;

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
        $application_id = $request->get('application_id');
        $flows = $request->get('flows');

        foreach ($flows as $index=>$flow) {
            $staff = $flow['staff']['value'];
            ProcessFlow::query()->create([
                'step'=>$index,
                'duration' => $flow['duration'],
                'staff_id'=>$staff,
                'application_profile_id'=>$application_id,
                'actions'=>json_encode($flow['actions']),
                'published' => true,
            ]);
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
