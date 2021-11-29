<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\InvestorProfileController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'investor/profile', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [InvestorProfileController::class, 'show']);
    Route::put('', [InvestorProfileController::class, 'update']);
});
Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [InvestorController::class, 'register']);
  
});


Route::group(['prefix' => 'auth/investor'], function () {
    Route::post('logout', [InvestorController::class, 'logout'])->middleware('auth:sanctum');
});


Route::prefix('/investor')->group(function () {
    Route::post('/store',[ApplicationFormController::class,'store']);
});



Route::get('/department/{slug}',[DepartmentController::class,'showDepartment']);


