<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

    public function getApplications()
    {
        // return 'yes';

        $user =  Auth::user();

        $app = $user->applications()->with('department')->get();

        return $app;
    }



    public function detail(Request $request,Application $model)
    {
        abort_if($model->user_id != Auth::id(),403,'You dont have permission!');
        $model->load(['profile', 'applicationValues', 'attachments']);
        return response()->json([
            'data' => $model,
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
