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

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value={{ old('email', $email) }} readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                    @error('new_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Repeat New Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                    @error('password_confirmation')
                                        <div>{{ $message }}</div>
                                    @enderror
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
 