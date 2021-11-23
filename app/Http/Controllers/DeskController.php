<?php

namespace App\Http\Controllers;

use App\Models\ApplicationMovement;
use App\Models\Staff;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    public function myApplication(Request $request)
    {
        $user=auth('sanctum')?->user();
        $search = $request->get('search');
        $staff=Staff::query()
            ->find(1);

        return $staff->myApplication()
            ->paginate();
    }
}
