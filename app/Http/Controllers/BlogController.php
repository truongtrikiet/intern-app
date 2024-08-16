<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Enums\BlogStatus;

class BlogController extends Controller
{
    public function list() {
        $blogs = Blog::where('user_email', Auth::user()->email)->get();
        return view('blog-app.list', ['blogs' => $blogs]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('user_email', Auth::user()->email)
        ->whereIn('status_blog', [BlogStatus::NewBlog, BlogStatus::UpdateBlog])->paginate(10);
        // $blogs = BlogStatus::NewBlog;
        // $blogs = BlogStatus::UpdateBlog;
        $blogs = Blog::paginate(10);
        return view('blog-app.grid', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog-app.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $blog = Blog::create([
            'user_email' => Auth::user()->email,
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'description' => $request->input('description'),
            'slug' => Str::slug($request->input('title')),
            'publish_date' => $request->input('publish_date', now()),
            'status_blog' => BlogStatus::Waiting,
        ]);
        

        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog-app.post', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if(Auth::user()->email !== $blog->user_email) {
            abort(403);
        }
        return view('blog-app.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title' => 'required|string|max:100',
            'slug' => 'required|string|max:100',
            'description' => 'nullable|string|max:200',
            'content' => 'nullable|string',
            'publish_date' => 'nullable|date',
            'status_blog' => 'required|in:0,1,2',
        ]);

        $blog->update($data);

        return redirect()->route('blog.index')->with('success', 'Blog was updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if (Auth::user()->email == $blog->user_email) {
            $blog->delete();

            return redirect()->route('blog.index')->with('success', 'Blog was deleted.');
        } 
        return redirect()->route('blog.index')->with('error', 'Blog can not delete.');
    }
}
