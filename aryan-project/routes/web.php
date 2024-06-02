<?php

use App\Http\Controllers\Makeuser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registation;

Route::get('/', [registation::class, 'index']);
Route::post('/', [registation::class, 'sign']);
Route::get('/aryan', [registation::class, 'send']);
Route::get('/aryan/delete/{id}', [registation::class, 'delete']);
Route::get('/aryan/update/{id}', [registation::class, 'update'])->name('user.update');

Route::get('/signup', [Makeuser::class, 'signup']);
Route::post('/signup', [Makeuser::class, 'signup_validate']);
Route::get('/login', [Makeuser::class, 'login']);
Route::post('/login', [Makeuser::class, 'login_validate']);

// Route::get('/aryan', function () {
//     return view('aryan');
// });
