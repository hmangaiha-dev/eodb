<?php

namespace App\Http\Controllers;

use App\Models\PartA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonApplicationController extends Controller
{
    public function getCommonApplication()
    {
        // return 'common';
        return Auth::user()->commonApplications()->with('partA')->first();
        // $parta = Auth::user()->commonApplications()->with('partA')->first();


    }

    public function store(Request $request)
    {
        // return $request->file();
        $applicant_photo =  $request->file('applicant_photo')->store('common');
        $pan_card =  $request->file('pan_card')->store('common');
        $tin_cert =  $request->file('tin_cert')->store('common');
        $cst_cert =  $request->file('cst_cert')->store('common');
        $mou_deed =  $request->file('mou_deed')->store('common');
        $company_reg_cert =  $request->file('company_reg_cert')->store('common');
        $udyog_memorandum =  $request->file('udyog_memorandum')->store('common');

        // return;
        $check = Auth::user()->commonApplications()->first()->partA()->updateOrCreate(
            [
                'common_id' => $request->common_id,
                // 'applicant_caste' => 'SC/ST'

            ],

            $request->only((new PartA())->getFillable()),

        );

        $check->applicant_photo = $applicant_photo;
        $check->pan_card = $pan_card;
        $check->tin_cert = $tin_cert;
        $check->cst_cert = $cst_cert;
        $check->mou_deed = $mou_deed;
        $check->company_reg_cert = $company_reg_cert;
        $check->udyog_memorandum = $udyog_memorandum;

        $check->save();
        // return $check;
    }
}
