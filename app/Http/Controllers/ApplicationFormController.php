<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    public function store(Request $request)
    {
        // return User
        return $request->all();
        
    }
}
