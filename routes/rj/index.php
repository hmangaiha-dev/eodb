<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InvestorController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [InvestorController::class, 'register']);
  
});


Route::prefix('/investor')->group(function () {
    Route::post('/store',[ApplicationFormController::class,'store']);
});


Route::get('/department/{slug}',[DepartmentController::class,'showDepartment']);
