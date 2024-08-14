@extends("layouts.auth-layout")
    

    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Email Form</h2>
                                    <p>Enter your email</p>
                                    
                                </div>

                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action={{route('recover.post')}} method="post">
                                    @csrf
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
               
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">RECOVER</button>
                                    </div>
                                </div>
                                </form>
                                

                                <!-- @if(session('error'))
                                    <div>{{ session('error') }}</div>
                                @endif -->
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <hr>
                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0"> Return back ? <a href={{url('/')}} class="text-warning">Sign In</a></p>
                                    </div>
                                </div>

                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
 