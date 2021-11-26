<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeskController extends Controller
{
    public function myApplication(Request $request)
    {
        $staff = auth('sanctum')?->user();
        $search = $request->get('search');

        return $staff->myApplication()
            ->where('status', 'dealing')
            ->paginate();
    }
}
