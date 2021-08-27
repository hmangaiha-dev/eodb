<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        Validator::validate($request->only(['email', 'password']), [
            'email' => 'required|email',
            'password' => 'required:confirmed'
        ]);
        $authenticated=Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);
        if (!$authenticated) {
            throw new \Exception('Invalid credential', 402);
        }
        $user = Auth::user();

        $personalToken=$user->createToken('personal_token')->plainTextToken;
        return response()->json([
            'currentUser'=>$user,
            'token'=>$personalToken,
            'message'=>'Login success'
        ],200);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            'currentUser'=>null,
            'message'=>'Logout successfully'
        ],200);
    }
}
