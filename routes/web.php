<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use App\Http\Kernel;
use App\Http\Middleware\AdminMiddleware;
use App\Models\User;


Route::get('/index', function (){
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});

Route::get('/mail', function (){
    return view('mail.test-mail');
});


//test Accessor - Attribute
Route::get('/', [UserController::class, 'index']);

//test Trap mail
Route::get('/testroute', function() {
    $name = "Jaden Code";

    Mail::to('truongtrikiet1801@gmail.com') -> send(new TestMail($name));
});


//sign in and sign up
Route::get('/signin', [AuthController::class, 'signinPage']) -> name('signinPage');
Route::post('/signin', [AuthController::class, 'signin']) -> name('signin');
//Route::get('/signup', [UserController::class, 'signupPage']) -> name('signupPage');
//Route::post('/signup', [UserController::class, 'signup']) -> name('signup');

//admin page
Route::middleware(['auth', 'admin']) -> group(function() {
    Route::get('/admin', [AuthController::class, 'signin']) -> name('admin.index');
});
