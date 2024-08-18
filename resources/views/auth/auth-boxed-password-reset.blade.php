@extends("layouts.auth-layout")
    

    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h2>Password Reset</h2>
                                    <p>Enter your new password to reset your Account</p>
                                </div>

                                <form action={{route('reset.password.post')}} method="post">
                                    @csrf
                                <input type="text" name="token" hidden value="{{ $token }}" >
                                <!-- <input type="hidden" name="email" value="{{ $email }}"> -->

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                    @if ($errors->has('password.regex'))
                                        <div class="alert alert-danger">{{ $errors->first('password.regex') }}</di>
                                    @endif
                                    @if ($errors->has('password.min'))
                                        <div class="alert alert-danger">{{ $errors->first('password.min') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Repeat New Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                    @if ($errors->has('password_confirmation.confirmed'))
                                        <div class="alert alert-danger">{{ $errors->first('password_confirmation.confirmed') }}</div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
 