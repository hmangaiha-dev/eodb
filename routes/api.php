<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvestorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'public-data'],function(){

});

Route::group(['prefix' => 'auth'],function(){
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});
Route::group(['prefix' => 'investor'],function(){
    Route::post('/', [InvestorController::class, 'register']);
    Route::get('/', [InvestorController::class, 'register']);
});

