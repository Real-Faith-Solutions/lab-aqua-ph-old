@extends('layout_plain')
@section('content')

<main class="login-form p-5" style="background:#173d4e">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <h3 class="card-header text-center">Register User</h3> --}}
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 p-5">
                                <form class="user" action="{{ route('register.custom') }}" method="POST">
                                    @csrf
                                    <h4 class="text-center">Create an account</h4>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Enter your Fullname" id="name" class="form-control form-control-user" name="name"
                                            required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Enter your Email" id="email_address" class="form-control form-control-user"
                                            name="email" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <select id="users" class="form-control"
                                            name="role" required autofocus style="border-radius: 90px">
                                            <option selected disabled>Select roles</option>
                                            <option value="super_admin">SUPER ADMIN</option>
                                            <option value="sales_manager">SALES MANAGER</option>
                                            <option value="marketing_manager">MARKETING MANAGER</option>
                                            <option value="service_coordinator">SERVICE COORDINATOR</option>
                                            <option value="admin_asst">ADMIN ASST</option>
                                            
                                            <option value="micro_analyst">MICRO ANALYST</option>
                                            <option value="pchem_analyst">PCHEM ANALYST</option>
                                            <option value="micro_manager">MICRO MANAGER</option>
                                            <option value="pchem_manager">PCHEM MANAGER</option>
                                            <option value="laboratory_asst">LABORATORY ASST</option>
                                            
                                        </select>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Enter your password" id="password" class="form-control form-control-user mb-3" name="password" required>
                                            @if ($errors->has('password'))
                                                @foreach ($errors->has('password') as $error)
                                                <span class="text-danger">
                                                    {{ $error }}
                                                </span>

                                                @endforeach
                                            @endif

                                        <input type="password" placeholder="Confirm your password" id="cpassword" class="form-control form-control-user mb-3"
                                            name="cpassword" required onchange="cpass()">

                                        <div class="alert alert-success" role="alert" id="cpassMatch" style="display: none">
                                          Password matched!
                                        </div>
                                        <div class="alert alert-danger" role="alert" id="cpassUnmatch" style="display: none">
                                          Password are not matched!
                                        </div>
                                    </div>

                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-info btn-user btn-block">REGISTER</button>
                                    </div>

<script>
    function cpass(){
        if (document.getElementById("cpassword").value != document.getElementById("password").value) {
            document.getElementById("cpassUnmatch").style.display = "block";
            document.getElementById("cpassMatch").style.display = "none";
        }
        if (document.getElementById("cpassword").value == document.getElementById("password").value) {
            document.getElementById("cpassUnmatch").style.display = "none";
            document.getElementById("cpassMatch").style.display = "block";
        }
    }
</script>

                                </form>
                                    <hr>
                                    <div class="text-center">
                                        {{-- <a class="small" href="{{ config('app.url') }}forgot-password">Forgot Password?</a> --}}
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ config('app.url') }}login">Login an Account!</a>
                                    </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

</main>


@endsection
