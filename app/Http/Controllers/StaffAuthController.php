<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffAuthController extends Controller
{
    public function login(Request $request)
    {

        $authenticate=Auth::guard('staff')->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        if (!$authenticate) {
            return response()->json(['message'=>"Invalid credential"], 400);
        }

        $user = Auth::guard('staff')->user();

        $abilities=$user->getPermissionsName();

        $token=$user->createToken('personal_access_token', $abilities)->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
        ],200);
    }

    public function logout(Request $request)
    {
        Auth::user()?->tokens()->delete();
        Auth::guard('staff')->logout();
        return response()->json([
            'data' => null
        ], 200);
    }
}
