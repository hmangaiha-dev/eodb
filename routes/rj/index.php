<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\CommonApplicationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\InvestorProfileController;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\ResetPasswordController;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\DepartmentService;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
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
    Route::post('/store', [ApplicationFormController::class, 'store']);
});


Route::group(['prefix' => 'department'], function () {
    Route::get('services', [DepartmentController::class, 'show']);
    Route::get('{slug}', [DepartmentController::class, 'showDepartment']);
});

Route::get('attach', function () {
    // return 3;
    return Application::with('attachments')->get();
});

Route::group(['prefix' => 'investor/applications', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [InvestorController::class, 'getApplications']);
    Route::get('{application}', [InvestorController::class, 'detail'])->where('application', '[0-9]+');
    Route::get('payments', [InvestorController::class, 'getPayments']);
});




Route::group(['prefix' => 'investor/caf', 'middleware' => 'auth:sanctum'], function () {
    Route::post('store', [InvestorController::class, 'store']);
    Route::get('{application}', [InvestorController::class, 'detail'])->where('application', '[0-9]+');
});


Route::group(['prefix' => 'investor/common-applications', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [CommonApplicationController::class, 'getCommonApplication']);
    Route::post('store', [CommonApplicationController::class, 'store']);
    // Route::get('{application}', [InvestorController::class, 'detail'])->where('application', '[0-9]+');
});





// Route::post('/forgot-password', [ResetPasswordController::class, 'resetPassword'])->middleware('guest')->name('password:email');
// Route::post('/forgot-password', function (Request $request) {
//     $request->validate(['email' => 'required|email']);

//     $status = Password::sendResetLink(
//         $request->only('email')
//     );

//     // return $status === Password::RESET_LINK_SENT
//     //     ? back()->with(['status' => __($status)])
//     //     : back()->withErrors(['email' => __($status)]);
// })->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('web')->name('password.reset');



// Route::post('/reset-password', function (Request $request) {
//     // dd($request->all());
// })->middleware('guest')->name('password.update');

Route::post('/forgot-password', [ResetPasswordController::class, 'sendResetLink'])->middleware('guest')->name('password.reset.link');
Route::post('/update-password', [ResetPasswordController::class, 'updatePassword'])->middleware('guest')->name('password.update');



Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::post('initiate-payment/{model}', [PaytmController::class, 'makePayment']);
});
Route::get('response-handler', [PaytmController::class, 'responseHandler']);
// Route::get('initiate-payment', [PaytmController::class, 'makePayment']);

// Route::post('/reset-password', [ResetPasswordController::class, 'postResetPassword'])->middleware('guest')->name('password.reset.post');


// Route::get('/service', function () {
//     $dept = DepartmentService::with(['category','department'])->get();
//     return $dept;
// });
