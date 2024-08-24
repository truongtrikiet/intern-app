@extends('layouts.admin-layout')


<div class="row layout-top-spacing">
    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">                                
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Blog</h4>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action={{route('admin.blog.update', ['id' => $blog->id])}} method="post">
                @csrf
                <div class="widget-content widget-content-area">
                <div class="input-group mb-3">
                        <span class="input-group-text" >Email User</span>
                        <input type="mail" class="form-control" placeholder="Email user" name="user_email" value="{{old('user_email', $blog->user_email)}}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Title Blog</span>
                        <input type="text" class="form-control" placeholder="Title Blog" name="title" value="{{old('title', $blog->title)}}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Description</span>
                        <input type="text" class="form-control" placeholder="Description" name="description" value="{{old('description', $blog->description)}}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Content</span>
                        <textarea type="text" class="form-control" placeholder="Content" name="content" readonly> {{old('content', $blog->content)}} </textarea>
                    </div>
                    <div class="col-xl-4 mb-xl-0 mb-2">
                        <select class="form-select" name="status_blog" id="status" value="{{old('status_blog', $blog->status_blog)}}">
                            <option>Status</option>
                            <option value="0" {{ old('status_blog', $blog->status_blog) == 0 ? 'selected' : '' }}>Waiting</option>
                            <option value="1" {{ old('status_blog', $blog->status_blog) == 1 ? 'selected' : '' }}>New Post</option>
                            <option value="2" {{ old('status_blog', $blog->status_blog) == 2 ? 'selected' : '' }}>Updated Post</option>
                        </select>
                    </div>
                    
                    <hr>
                    <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-secondary w-100" type="submit" >SAVE</button>
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-light-dark mb-2 me-4 w-100" type="submit" href={{url('/blog-manage')}}>CANCEL</button>
                        </div>
                    </div> -->
                </form>

            </div>
        </div>
    </div>
</div>