<?php
use App\Http\Controllers\Auth\SignInController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/signin', function () {
    return view('admin/auth/signin');
});

Route::get('/admin/dashboard', function () {
    return view('admin/index');
});

//Route::get('/createAdmin',[AuthController::class,'adminRole']);

Route::post('/login',[SignInController::class,'loginUser']);

//Logout Route for login user
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/signin');
});


