<?php
use App\Http\Controllers\Auth\SignInController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin/index');
// });

Route::get('/signin', function () {
    return view('admin/auth/signin');
});

Route::get('/dashboard', function () {
    return view('admin/index');
});

//Route::get('/createAdmin',[AuthController::class,'adminRole']);

Route::post('/login',[SignInController::class,'loginUser']);

