<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogGridPage() {
        return view('blog-app.grid');
    }
    public function blogPostPage() {
        return view('blog-app.post');
    }
    public function blogListPage() {
        return view('blog-app.list');
    }
    public function blogCreatePage() {
        return view('blog-app.create');
    }
    public function blogEditPage() {
        return view('blog-app.edit');
    }
}
