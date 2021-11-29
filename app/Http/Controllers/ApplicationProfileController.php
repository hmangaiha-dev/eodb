<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use Illuminate\Http\Request;

class ApplicationProfileController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'list' =>ApplicationProfile::query()->paginate(),
        ]);
    }

    public function applicationFlows(Request $request)
    {
        return response()->json([
            'list' => ApplicationProfile::query()->whereHas('processFlows')->paginate(),
            'message' => ''
        ]);
    }

    public function toggle(Request $request,ApplicationProfile $model)
    {
        $model->published = !$model->published;
        return response()->json([
            'message' => 'Process flow updated',
            'list' => ApplicationProfile::query()
                ->whereHas('processFlows')
                ->paginate(),
        ],200);
    }

    public function destroyFlow(Request $request, ApplicationProfile $model)
    {
        $model->processFlows()->delete();
        return response()->json([
            'message' => 'Process flow deleted',
            'list' => ApplicationProfile::query()
                ->whereHas('processFlows')
                ->paginate(),
        ]);
    }
}