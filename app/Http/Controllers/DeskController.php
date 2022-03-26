<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeskController extends Controller
{
    public function myApplication(Request $request)
    {
        $staff = auth()?->user();
        $search = $request->get('search'); 

        return $staff->myApplication()
            ->where([['status', '=', 'dealing'], ['paid', '=', true ]])
            ->where('applications.archived', false)
            ->paginate();





        // $staff = auth('sanctum')->user();
        // $office = $staff->currentPost();
        // //        $office = new Office();
        // $applications = $office?->applications()
        //     ->paginate();
        // return response()->json($applications, 200);
    }
}
