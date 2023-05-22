@extends('layout_plain')
@section('content')
<!-- Outer Row -->
<main class="login-form p-5" style="background:#173d4e">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image" style="background-image: url('{{ asset('images/aqualab_logo.png') }}'); background-size: contain; background-repeat: no-repeat;background-color: #05d8ce;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>
                                <form class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ config('app.url') }}registration">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ config('app.url') }}login">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
