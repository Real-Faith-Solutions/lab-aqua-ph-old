@extends('guest')
@section('content')

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    {{-- <h3 class="card-header text-center">Login</h3> --}}
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <form class="user" method="POST" action="{{ route('login.custom') }}">
                                    @csrf
                                    <h4 class="text-center">Welcome Back!</h4>
                                    <div class="form-group mb-3">
                                        {{-- <input type="name" placeholder="Full Name" id="email" class="form-control form-control-user" name="name" required
                                            autofocus>
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif --}}
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" placeholder="Email" id="email" class="form-control form-control-user" name="email" required
                                            autofocus>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password" class="form-control form-control-user" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-info btn-user btn-block">Sign In</button>
                                    </div>
                                </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ config('app.url') }}forgot-password">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ config('app.url') }}registration">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
