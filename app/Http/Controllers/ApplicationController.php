<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationMovement;
use App\Models\ApplicationProfile;
use App\Models\Attachment;
use App\Models\Certificate;
use App\Utils\AttachmentUtils;
use App\Utils\KeysUtil;
use App\Utils\NumberGenerator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ApplicationController extends Controller
{

    public function detail(Request $request, Application $model)
    {
        $step = $model->current_step;
        $flow = $model->profile()->first()->processFlows()->where('process_flows.step', $step)->first();

        $model->load(['profile', 'applicationValues', 'attachments']);
        return response()->json([
            'data' => $model,
            'actions' => json_decode($flow?->actions)
        ], 200);
    }

    public function forward(Request $request, Application $model)
    {
        $staff = auth('sanctum')->user();
        $currentMovement = $model->movements()->latest()->first();
        $appProfile = $model->profile()->first();

        if ($currentMovement->step >= $appProfile->last_step) {
            throw new Exception('Process finish exception');
        }
        $flow = $appProfile->processFlows()->where('step', $currentMovement->step + 1)?->first();

        $currentMovement->status = 'detached';
        $currentMovement->save();
        $movement = ApplicationMovement::query()->create([
            'application_id' => $model->id,
            'staff_id' => $flow->staff_id,
            'status' => 'dealing',
            'step' => $flow->step,
        ]);

        return response()->json([
            'message' => 'Application forwarded successfully'
        ], 200);
    }
    public function backward(Request $request, Application $model)
    {
        $staff = auth('sanctum')->user();

        $currentMovement = $model->movements()->latest()->first();
        $appProfile = $model->profile()->first();

        if ($currentMovement->step <= 1) {
            throw new ValidationException('Process finish exception');
        }
        $flow = $appProfile->processFlows()->where('step', $currentMovement->step - 1)?->first();

        $currentMovement->status = 'detached';
        $currentMovement->save();
        $movement = ApplicationMovement::query()->create([
            'application_id' => $model->id,
            'staff_id' => $flow->staff_id,
            'status' => 'dealing',
            'step' => $flow->step,
        ]);

        return response()->json([
            'message' => 'Application sent back successfully'
        ], 200);
    }

    public function submitApplication(Request $request)
    {
        // // return $request->all();
        // return auth()->user();
        // // return 'jje';


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
            'regn_no' => NumberGenerator::fakeIdGenerator($request->get('application_code')),
            'application_profile_id' => $appProfile->id,
            'user_id' => Auth::id(),
            'department_id' => $request->get('department_id'),
            'current_state' => 'submitted',
            'paid' => true,
        ]);




        $application->states()->create([
            'name' => 'submitted',
            'remark' => 'Application submitted at ' . now()->toDateString()
        ]);
        $application->office()->attach($appProfile->office_id);

        if ($request->application_code == 'LAND_REVENUE_LSC' || $request->application_code == 'LAND_REVENUE_PATTA' || $request->application_code == 'ENV_FOREST_BAMBOO' || $request->application_code == 'C&E_POWER_SUBSIDY') {
            if ($request->application_code == 'ENV_FOREST_BAMBOO') {
                $arrs = (array) json_decode($request->bamboo_particulars, true);
                $application->bamboos()->createMany($arrs);
            } else if ($request->application_code == 'C&E_POWER_SUBSIDY') {
                $arrs = (array) json_decode($request->machineries, true);
                $application->powerSubsidyMachineries()->createMany($arrs);
            } else {
                $arrs =  (array)json_decode($request->lsc_details, true);
                $application->lscDetails()->createMany($arrs);
            }
        }

        DB::transaction(function ($cb) use ($appProfile, $request, $application) {
            $keysArr = KeysUtil::getApplicationKeys($request->get('application_code'));
            foreach ($keysArr as $key) {
                $application->applicationValues()->create([
                    'field_key' => $key,
                    'field_value' => $request->get($key),
                    'field_label' => KeysUtil::getApplicationLabel($key),
                ]);
            }
            $flow = $appProfile->processFlows()
                ->orderBy('step')
                ->first();

            $movement = ApplicationMovement::query()->create([
                'application_id' => $application->id,
                'staff_id' => $flow->staff_id,
                'status' => 'dealing',
                'step' => $flow->step,
            ]);
        });
        //Attachment upload
        foreach ($request->file() as $key => $file) {
            $attachmentProfile = AttachmentUtils::getAttachment($key);
            if (!blank($attachmentProfile)) {
                $disk = $attachmentProfile['disk'];
                $folder = $attachmentProfile['folder'];
                $path = Storage::disk($disk)->put($folder, $file);
                $application->attachments()->create([
                    'original_name' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                    'label' => $attachmentProfile['label'],
                    'size' => $file->getSize(),
                    'path' => $path
                ]);
            }
        }

        return response()->json([
            'message' => 'Application submitted successfully'
        ], 200);
    }

    public function getStates(Request $request, Application $model)
    {
        $states = $model?->states()?->get();
        return response()->json($states, 200);
    }

    public function createState(Request $request, Application $model)
    {
        $state = $model->states()->create($request->only(['name', 'remark']));
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $path = Storage::disk(Attachment::DISK)->put('states', $file);
            $state->attachment()->create([
                'original_name' => $file->getClientOriginalName(),
                'mime' => $file->getMimeType(),
                'label' => '',
                'size' => $file->getSize(),
                'path' => $path
            ]);
        }
        return response()->json([
            'list' => $model->states()->get(),
            'message' => 'Application state created successfully'
        ], 200);
    }

    public function close(Request $request, Application $model)
    {
        $model->archived = true;
        $model->save();
        return response()->json([
            'list' => Application::query()->paginate(),
            'message' => 'Application closed/archived successfully'
        ], 200);
    }

    public function getCertificates(Request $request, Application $model)
    {
        return response()->json([
            'list' => $model->certificates()->get()
        ], 200);
    }

    public function getUserCertificates()
    {
        // $array =  collect(Auth::user()->certificates()->get());
        // return $array;
        return response()->json([
            'list' => collect(Auth::user()->certificates()->get()),
        ], 200);
        // return response()->json([
        //     'list' => $model->certificates()->get()
        // ], 200);
    }



    public function createCertificate(Request $request, Application $model)
    {
        $certificate = $model->certificates()->save(new Certificate($request->only((new Certificate())->getFillable())));

        if ($request->hasFile('attachment')) {
            $path = Storage::disk(Certificate::DISK)
                ->put($model->getCertificateFolder(), $request->file('attachment'));
            $certificate->path = $path;
            $certificate->save();
        }

        return response()->json([
            'list' => $model->certificates()->get(),
            'message' => 'Certificate upload successfully'
        ], 200);
    }

    public function deleteCertificate(Request $request, Application $model, $id)
    {
        $model->certificates()->find($id)->delete();
        return response()->json([
            'list' => $model->certificates()->get(),
            'message' => 'Certificate deleted successfully'
        ], 200);
    }


    public function getPrint(Request $request, Application $model)
    {
        $appProfile = $model->profile()->first();
        //        $appProfile = new ApplicationProfile();
        $template = $appProfile?->printTemplate()->first()->content ?? '';

        $vars = $model->applicationValues()->get()->flatMap(fn ($item) => [
            "{{{$item->field_key}}}" => $item->field_value
        ])->toArray();

        if ($model->application_code == 'LAND_REVENUE_LSC' || $model->application_code == 'LAND_REVENUE_PATTA' || $model->application_code == 'ENV_FOREST_BAMBOO' || $model->application_code == 'C&E_POWER_SUBSIDY') {

            if ($model->application_code == 'ENV_FOREST_BAMBOO') {
                $details = $model->bamboos()->get();
                $field_key = ['bamboo_total_species', 'bamboo_total_nos', 'bamboo_total_total_bamboo', 'bamboo_total_total_mature'];
                $total = $model->applicationValues()->whereIn('field_key', $field_key)->get()->pluck('field_value');
                $views = view('bamboo.table', ["details" => $details, 'code' => $model->application_code, 'total' => $total])->render();
                $content = [
                    "{{content}}" => $views
                ];

                $vars = $vars + $content;
            } else if($model->application_code == 'C&E_POWER_SUBSIDY'){
                $details = $model->powerSubsidyMachineries()->get();
                $views = view('machineries.table', ["details" => $details, 'code' => $model->application_code])->render();
                $content = [
                    "{{content}}" => $views
                ];

                $vars = $vars + $content;
            } 
            else {
                $details = $model->lscDetails()->get();
                $views = view('lsc.table', ["details" => $details, 'code' => $model->application_code])->render();
                $content = [
                    "{{content}}" => $views
                ];

                $vars = $vars + $content;
            }
        }

        $result = $this->replaceTemplate($template, $vars);

        return response()->json([
            'template' => $result,
            'application' => $model,
            'attachment' => $model->attachments()->get(),
        ], 200);
    }

    public function getAttachment(Request $request, Application $model)
    {
        return response()->json([
            'list' => $model->attachments()->get(),
        ], 200);
    }

    private function replaceTemplate($str, $replace_vars)
    {
        $keys = array_keys($replace_vars);
        // dd($keys);
        // return $str;
        $values = array_values($replace_vars);
        return Str::replace($keys, $values, $str);
    }
}
