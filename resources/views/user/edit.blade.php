@extends('layouts.admin-layout')


<div class="row layout-top-spacing">
    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">                                
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit User</h4>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action={{route('user.update', ['email' => $user->email])}} method="post">
                @csrf
                <div class="widget-content widget-content-area">
                    <div class="input-group mb-3">
                        <span class="input-group-text" >First Name</span>
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{old('first_name', $user->first_name)}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Last Name</span>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{old('last_name', $user->last_name)}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Email</span>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email', $user->email)}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Role</span>
                        <input type="text" class="form-control" placeholder="Role" name="role" value="{{old('role', $user->role)}}">
                    </div>
                    <div class="col-xl-4 mb-xl-0 mb-2">
                        <select class="form-select" name="status" id="status" value="{{old('status', $user->status)}}">
                            <option>Status</option>
                            <option value="0" {{ old('status', $user->status) == 0 ? 'selected' : '' }}>Waiting</option>
                            <option value="1" {{ old('status', $user->status) == 1 ? 'selected' : '' }}>Approved</option>
                            <option value="2" {{ old('status', $user->status) == 2 ? 'selected' : '' }}>Denied</option>
                            <option value="3" {{ old('status', $user->status) == 3 ? 'selected' : '' }}>Locked</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-secondary w-100" type="submit" >SAVE</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-light-dark mb-2 me-4 w-100" href={{url('/user-manage', $user->email)}}>CANCEL</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>