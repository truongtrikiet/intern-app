<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use App\Http\Kernel;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserStatusMiddleware;
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
Route::get('/home', [UserController::class, 'index']);

//test Trap mail
// Route::get('/testroute', function() {
//     $name = "Jaden Code";

//     Mail::to('truongtrikiet1801@gmail.com') -> send(new TestMail($name));
// });




//sign in and sign up Logout
Route::get('/', [AuthController::class, 'signinPage']) -> name('signinPage');
Route::post('/signin', [AuthController::class, 'signin']) -> name('signin.post');
Route::get('/signup', [AuthController::class, 'signupPage']) -> name('signupPage');
Route::post('/signup', [AuthController::class, 'signup']) -> name('signup.post');
Route::post('/logout', [AuthController::class, 'logout']) -> name('logout');

Route::middleware(['auth', 'user.status'])->group(function(){
    Route::get('/blog-app.post', [BlogController::class, 'blogPostPage'])->name('blog-user');
});

//admin page
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', function(){
        if (Auth::user()->role === 'admin'){
            return redirect('/admin');
        }
        return view('index');
    })->name('home');

    Route::middleware('admin')->group(function(){
        Route::get('/admin', function(){
            return view('admin.index');
        })->name('admin.index');
    });

    //edit user
    Route::get('/user-manage', [UserController::class, 'showUsers'])->name('user.manage');
    Route::get('/user-manage/{email}/edit', [UserController::class, 'userEdit'])->name('user.edit');
    Route::post('/user-manage/{email}', [UserController::class, 'userUpdate'])->name('user.update');
});


//manage-page
//BLOG PAGE
Route::get('/post-manage', function(){
    return view('/admin.post-manage');
});

Route::get('/post', function(){
    return view('/blog-app.post');
});


