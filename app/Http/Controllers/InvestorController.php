<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\CommonApplication;
use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InvestorController extends Controller
{
    public function register(Request $request)
    {
        // return $request->all();
        $data = $request->only((new Investor())->getFillable());
        $data['password'] = Hash::make($request->password);
        $request->validate(User::RULES);
        $investor = User::query()
            ->create($data);
        return response()->json([
            'data' => $investor,
            'message' => 'Registration success'
        ]);
    }


    public function store(Request $request)
    {
        // return $request->all();
        $caf = CommonApplication::query()->create([
            "user_id" => Auth::id(),
            "body" => $request->all()
        ]);




        foreach ($request->file() as $key => $file) {
            $filename = time() . uniqid() . '.' . $file->getClientOriginalExtension();

            $path = $file->storeAs($request->get('application_code'), $filename);
            $caf->attachments()->create([
                'original_name' => $key,
                'mime' => 'jpg',
                'label' =>  $key,
                'size' => '2',
                'path' => $path
            ]);
        }
    }

    public function getApplications()
    {
        // return 'yes';

        $user =  Auth::user();

        $app = $user->applications()->with('department')->orderBy('applications.created_at', 'desc')->get();

        return $app;
    }



    public function detail(Application $application)
    {
        abort_if($application->user_id != Auth::id(), 403, 'You dont have permission!');
        $application->load(['profile', 'applicationValues', 'attachments']);
        return response()->json([
            'data' => $application,
        ], 200);
    }



    public function logout(Request $request)
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'data' => 'tokens deleted'
        ], 200);
    }
}
