<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use App\Models\PrintTemplate;
use Illuminate\Http\Request;

class ApplicationProfileController extends Controller
{
    public function index(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        $search = $request->get('search');
        $list = ApplicationProfile::query()
            ->when($search, fn ($q) => $q->where('title', 'LIKE', "%$search%")->orWhere('code', 'LIKE', "%$search%"))
            ->when(isset($office), function ($q) use ($office){
                return $q->where('office_id',$office->id);
            },function(){
                // return $q->gall
            })
            ->paginate();
        $template = ApplicationProfile::query()->whereHas('printTemplate')->when(isset($office),function($q) use($office){
            return $q->where('office_id',$office->id);
        })->get();
        return response()->json([
            'list' => $list,
            'templates' => $template
        ]);
    }

    public function applicationFlows(Request $request)
    {
        // return $request->all();
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        return response()->json([
            'list' => ApplicationProfile::query()->whereHas('processFlows')->when(isset($office),function($q) use($office)  {
                return $q->where('office_id',$office->id);
            })->with('processFlows')->paginate(),
            'message' => ''
        ]);
    }

    public function toggle(Request $request, ApplicationProfile $model)
    {
        $model->published = !$model->published;
        return response()->json([
            'message' => 'Process flow updated',
            'list' => ApplicationProfile::query()
                ->whereHas('processFlows')
                ->paginate(),
        ], 200);
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

    public function deleteApplicationProfile(Request $request, ApplicationProfile $model)
    {
        $model->processFlows()->delete();
        $model->delete();
        return response()->json([
            'message' => 'Application profile deleted successfully',
            'list' => ApplicationProfile::query()
                ->paginate(),
        ]);
    }

    public function createPrintTemplate(Request $request, ApplicationProfile $model)
    {
        $template = $model->printTemplate()->updateOrCreate(
            ['application_profile_id' => $model->id],
            $request->only((new PrintTemplate())->getFillable())
        );

        return response()->json([
            'message' => 'Application print template created successfully',
            'data' => $template
        ]);
    }

    public function detail(Request $request, ApplicationProfile $model)
    {
        return response()->json($model->load('printTemplate'), 200);
    }
}
