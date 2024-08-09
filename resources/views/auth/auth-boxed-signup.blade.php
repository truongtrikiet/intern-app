@extends('layouts.auth-layout')


    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <h2>Sign Up</h2>
                                    <p>Enter your email and password to register</p>

                                </div>


                                <form action={{route('signup.post')}} method='post' >
                                    @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control add-billing-address-input" name="first_name" required>
                                    </div>
                                </div>
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert" style="color: red">
                                        @foreach($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control add-billing-address-input" name="last_name" required>
                                    </div>
                                </div>
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert" style="color: red">
                                        @foreach($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert" style="color: red">
                                        @foreach($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control" name="password" required>
                                    </div>
                                </div>
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert" style="color: red">
                                        @foreach($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password Repeat</label>
                                            <input type="text" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert" style="color: red">
                                        @foreach($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    </div>
                                    @endif

                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                I agree the <a href="javascript:void(0);" class="text-primary">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- </form> -->

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100" type="submit" >SIGN UP</button>
                                    </div>
                                </div>
                                </form>
                                

                                <div class="col-12 mb-4">
                                    <div class="">
                                        <div class="seperator">
                                            <hr>
                                            <div class="seperator-text"> <span>Or continue with</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100 ">
                                            <img src={{asset("src/assets/img/google-gmail.svg")}} alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src={{asset("src/assets/img/github-icon.svg")}} alt="" class="img-fluid">
                                            <span class="btn-text-inner">Github</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src={{asset("src/assets/img/twitter.svg")}} alt="" class="img-fluid">
                                            <span class="btn-text-inner">Twitter</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center">
<!--                                        <p class="mb-0">Already have an account ? <a href="javascript:void(0);" class="text-warning">Sign in</a></p>-->
                                        <p class="mb-0">Already have an account ? <a href={{url("/")}} class="text-warning">Sign in</a></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
