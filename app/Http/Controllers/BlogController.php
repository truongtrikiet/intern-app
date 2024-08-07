<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogPostPage() {
        return view('blog-app.post');
    }
}
