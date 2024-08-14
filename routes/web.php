<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PasswordController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Kernel;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserStatusMiddleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


Route::get('/index', function (){
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});

//test Accessor - Attribute
Route::get('/home', [UserController::class, 'index']);


//sign in and sign up Logout //AUTH CONTROLLER
Route::get('/', [AuthController::class, 'signinPage']) -> name('signinPage');
Route::post('/signin', [AuthController::class, 'signin']) -> name('signin.post');
Route::get('/signup', [AuthController::class, 'signupPage']) -> name('signupPage');
Route::post('/signup', [AuthController::class, 'signup']) -> name('signup.post');
Route::post('/logout', [AuthController::class, 'logout']) -> name('logout');


//reset password CONTROLLER
Route::get('/recover-form', [PasswordController::class, 'recoverForm'])->name('recover.page');
Route::post('/recover', [PasswordController::class, 'recoverMail'])->name('recover.post');
Route::get('/reset-form/{token} ', [PasswordController::class, 'resetPasswordForm'])->name('reset.page');
Route::post('/reset-password', [PasswordController::class, 'resetPasswordPost'])->name('reset.password.post');


Route::middleware(['auth', 'user.status'])->group(function(){
    Route::get('/blog-app.grid', [BlogController::class, 'gridBlog'])->name('grid-blog');
});

//admin page //ADMIN CONTROLLER
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', function(){
        if (Auth::user()->role === 'admin'){
            return redirect('/admin');
        }
        return view('blog-app.grid');
    })->name('blog');

    Route::middleware('admin')->group(function(){
        Route::get('/admin', function(){
            return view('admin.index');
        })->name('admin.index');
    });

    //edit user
    Route::get('/user-manage', [AdminController::class, 'showUsers'])->name('user.manage');
    Route::get('/user-manage/{email}/edit', [AdminController::class, 'userEdit'])->name('user.edit');
    Route::post('/user-manage/{email}', [AdminController::class, 'userUpdate'])->name('user.update');
});


//profile //UserController
// Route::get('/profile/{email}', [UserController::class, 'profilePage'])->name('profile.page');
// Route::post('profile/update/{email}', [UserController::class, 'profileUpdate'])->name('profile.update');
Route::middleware(['auth'])->group(function(){
    Route::get('/profile/{email}', [UserController::class, 'profilePage'])->name('profile.page');
    Route::post('/profile/{email}/update', [UserController::class, 'profileUpdate'])->name('profile.update');
});



//manage-page
//BLOG PAGE
Route::get('/post-manage', function(){
    return view('/admin.post-manage');
});

Route::get('/blog-app.post', function(){
    return view('/blog-app.post');
});
Route::get('/blog-app.list', function(){
    return view('/blog-app.list');
});
Route::get('/blog-app.create', function(){
    return view('/blog-app.create');
});
Route::get('/blog-app.edit', function(){
    return view('/blog-app.edit');
});

