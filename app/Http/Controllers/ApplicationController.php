<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationMovement;
use App\Models\ApplicationProfile;
use App\Utils\KeysUtil;
use App\Utils\NumberGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\FileBag;

class ApplicationController extends Controller
{

    public function detail(Request $request,Application $model)
    {
        $step=$model->current_step;
        $flow=$model->profile()->first()->processFlows()->where('process_flows.step',$step)->first();

        $model->load(['profile', 'applicationValues']);
        return response()->json([
            'data' => $model,
            'actions'=>json_decode($flow?->actions)
        ], 200);
    }
    public function forward(Request $request,Application $model)
    {
        $staff = auth('sanctum')->user();
        $currentMovement = $model->movements()->latest()->first();
        $appProfile = $model->profile()->first();

        if ($currentMovement->step>=$appProfile->last_step) {
            throw new \Exception('Process finish exception');
        }
        $flow = $appProfile->processFlows()->where('step', $currentMovement->step+1)?->first();

        $currentMovement->status = 'detached';
        $currentMovement->save();
        $movement = ApplicationMovement::query()->create([
            'application_id' => $model->id,
            'staff_id' => $flow->staff_id,
            'status'=>'dealing',
            'step' => $flow->step,
        ]);

        return response()->json([
            'message' => 'Application forwarded successfully'
        ], 200);
    }
    public function submitApplication(Request $request)
    {
        // return $request->all();
        $filename = time().'.'.$request->file('voters_id')->getClientOriginalExtension();
        // return $request->file('voters_id')->getClientOriginalName();
        // return $request->file('voters_id')->storeAs('uploads',$filename);
        // return $request->fields['area_plot'];
        $this->validate($request, [
            'application_code' => ['required'],
            'department_id' => ['required'],
        ]);

        $appProfile = ApplicationProfile::query()
            ->where('code', $request->get('application_code'))
            ->where('published', true)
            ->first();

        $application = Application::query()->create([
            'application_code' => $request->get('application_code'),
            'regn_no' => NumberGenerator::fakeIdGenerator(),
            'application_profile_id'=>$appProfile->id,
            'user_id' => 1,
            'department_id' => $request->get('department_id'),
        ]);
        DB::transaction(function ($cb) use ($appProfile, $request, $application) {

//        $formData=$request->except(['application_code', 'department_id']);
//        $application = new Application();
            $keysArr=KeysUtil::getApplicationKeys($request->get('application_code'));
            foreach ($keysArr as $key) {
                $application->applicationValues()->create([
                    'field_key' => $key,
                    'field_value'=>$request->get($key),
                    'field_label' => KeysUtil::getApplicationLabel($key),
                ]);
            }


            $flow = $appProfile->processFlows()
                ->orderBy('step')
                ->first();

            $movement = ApplicationMovement::query()->create([
                'application_id' => $application->id,
                'staff_id' => $flow->staff_id,
                'status'=>'dealing',
                'step' => $flow->step,
            ]);
        });

        return response()->json([
            'message' => 'Application submitted successfully'
        ], 200);
    }
}
