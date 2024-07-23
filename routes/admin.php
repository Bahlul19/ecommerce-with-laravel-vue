<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin/index');
// });

Route::get('/dashboard', function () {
    return view('admin/index');
});