@extends('layouts.auth-layout')

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>

                                </div>
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form action="{{route('signin.post')}}" method="post">
                                    @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                        <!-- @error('email')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                        <!-- @error('password')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100" type="submit" >SIGN IN</button>
                                    </div>
                                </div>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                    </div>
                                    @endif

                                <!-- <div class="col-12 mb-4">
                                    <div class="">
                                        <div class="seperator">
                                            <hr>
                                            <div class="seperator-text"> <span>Or continue with</span></div>
                                        </div>
                                    </div>
                                </div> -->
                                </form>


                                <!-- <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100 ">
                                            <img src={{asset("src/assets/img/google-gmail.svg")}} alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
                                </div> -->

                                <!-- <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src={{asset("src/assets/img/github-icon.svg")}} alt="" class="img-fluid">
                                            <span class="btn-text-inner">Github</span>
                                        </button>
                                    </div>
                                </div> -->

                                <!-- <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src={{asset("src/assets/img/twitter.svg")}} alt="" class="img-fluid">
                                            <span class="btn-text-inner">Twitter</span>
                                        </button>
                                    </div>
                                </div> -->

                                <div class="col-12">
                                    <div class="text-center">
<!--                                        <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);" class="text-warning">Sign Up</a></p>-->
                                        <p class="mb-0">Dont't have an account ? <a href={{url("/signup")}} class="text-warning">Sign Up</a></p>
                                        <p class="mb-0">Forgot password ? <a href={{url('/recover-form')}} class="text-warning">Reset Password</a></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
