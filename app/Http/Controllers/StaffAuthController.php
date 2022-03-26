<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, ['email' => 'required', 'password' => 'required']);

        $staff=Staff::query()->where('email', $request->get('email'))->first();
        if (blank($staff)) {
            return response()->json(['message'=>"User not found"], 400);
        }
        $found=Hash::check($request->get('password'), $staff->password);
        if (!$found) {
            return response()->json(['message'=>"Invalid credential"], 400);
        }

//        \auth('staff')->login($staff);

        $abilities=$staff->getPermissionsName();
        $token=$staff->createToken('personal_access_token', $abilities)->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $staff,
            'permissions'=>$abilities
        ],200);
    }

    public function logout(Request $request)
    {

        $user=$request->user();
        $user?->tokens()->delete();
        auth('web')?->logout();
        return response()->json([
            'data' => null
        ], 200);
    }
}
