<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return response()->json([
            'data' => \auth('sanctum')->user(),
        ], 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'mobile' => 'required',
        ]);
        $user = \auth('sanctum')->user();
        $user->fullname = $request->get('fullname');
        $user->mobile = $request->get('mobile');
        if ($request->has('password')) {
            if ($request->get('password') !== $request->get('password_confirmation')) {
                throw new \Exception('Password must match', 500);
            } else {
                $user->password = \Illuminate\Support\Facades\Hash::make($request->get('password'));
            }
        }
        $user->save();
        return response()->json([
            'message' => 'Profile updated successfully'
        ], 200);
    }
}
