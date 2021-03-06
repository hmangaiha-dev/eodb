<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

   public function login(Request $request)
    {
        $this->validate($request, ['email' => 'required', 'password' => 'required']);

        $staff=User::query()->where('email', $request->get('email'))->first();
        if (blank($staff)) {
            return response()->json(['message'=>"User not found"], 400);
        }
        $found=Hash::check($request->get('password'), $staff->password);
        if (!$found) {
            return response()->json(['message'=>"Invalid credential"], 400);
        }

        \auth('user')->login($staff);

        $token=$staff->createToken('personal_access_token', [])->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $staff,
        ],200);
    }

    public function logout(Request $request)
    {
        \auth()->user()?->tokens()->delete();
        return response()->json([
            'data' => null
        ], 200);
    }
}
