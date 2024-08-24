<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Enums\BlogStatus;
use App\Http\Requests\BlogUpdateRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function list() {
        $blogs = Blog::where('user_email', Auth::user()->email)->latest()->get();
        return view('blog-app.list', ['blogs' => $blogs]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('user')
                ->whereIn('status_blog', [BlogStatus::NewBlog, BlogStatus::UpdateBlog])
                ->latest()->paginate(10);
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
    public function store(BlogRequest $request, $blog)
    {
        // dd($request->all());
        $blog = Blog::create([
            'user_email' => Auth::user()->email,
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'description' => $request->input('description'),
            'slug' => Str::slug($request->input('title')),
            'publish_date' => $request->input('publish_date', now()),
            'status_blog' => BlogStatus::Waiting,
        ]);

        if ($request->hasFile('thumbnail')) {
            $blog->addMediaFromRequest('thumbnail')
                 ->toMediaCollection('thumbnail');
        }
        
        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // $blog = BLog::find($id);
        // Auth::user();
        // return view('blog-app.post', ['blog' => $blog]);

        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog-app.post', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        
        if(Auth::user()->email !== $blog->user_email) {
            abort(403);
        }

        return view('blog-app.edit', ['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $blog->user_email = Auth::user()->email;
        $blog->title = $request->input('title');
        $blog->slug = Str::slug($request->input('title'));
        $blog->description = $request->input('description');
        $blog->content = $request->input('content');

        if($request->hasFile('thumbnail')) {
            // $blog->clearMediaConllection('thumbnail');
            $blog->addMediat($request->file('thumbnail'))
            ->toMediaCollection('thumbnail');
        }

        $blog->save();
        
        return redirect()->route('blog.edit', $blog->id)->with('success', 'Blog was updated.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog was deleted.');
    }
}
