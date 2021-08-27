<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function send(Request $request)
    {
        $request->validate(Otp::RULES);
        //TODO::send sms
        $otp=Otp::query()->create($request->only((new Otp())->getFillable()));
        return response()->json([
            'data' => $otp->otp,
            'message' => 'Otp sent successfully'
        ], 200);
    }

    public static function verify(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'otp' => 'required'
        ]);
        $otp= Otp::query()
            ->where('mobile', $request->get('mobile'))
            ->where('otp', $request->get('otp'))
            ->where('used', $request->get(false))
            ->latest('created_at')
            ->first();
        if (!$otp) {
            throw new \Exception('Invalid otp',402);
        }
        $otp->update(['used' => true]);
        return response()->json([
            'data'=>true,
            'message'=>'Otp verified successfully'
        ],200);
    }
}
