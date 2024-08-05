<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use App\Http\Kernel;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;


Route::get('/index', function (){
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});

// Route::get('/mail', function (){
//     return view('mail.test-mail');
// });


//test Accessor - Attribute
Route::get('/', [UserController::class, 'index']);

//test Trap mail
// Route::get('/testroute', function() {
//     $name = "Jaden Code";

//     Mail::to('truongtrikiet1801@gmail.com') -> send(new TestMail($name));
// });




//sign in and sign up
Route::get('/signin', [AuthController::class, 'signinPage']) -> name('signinPage');
Route::post('/signin', [AuthController::class, 'signin']) -> name('signin.post');
Route::get('/signup', [AuthController::class, 'signupPage']) -> name('signupPage');
Route::post('/signup', [AuthController::class, 'signup']) -> name('signup.post');

//admin page
Route::middleware('auth')->group(function(){
    Route::get('/', function(){
        if (Auth::user()->role === 'admin'){
            return redirect('/admin');
        }
        return view('home');
    })->name('home');

    Route::middleware('admin')->group(function(){
        Route::get('/admin', function(){
            return view('admin.index');
        })->name('admin.index');
    });
});


//manage-page
Route::get('/user-manage', [UserController::class, 'showUsers'])->name('user.manage');

Route::get('/post-manage', function(){
    return view('/admin.post-manage');
});