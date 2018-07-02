<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Titan Admin</title>
    <!-- Styles -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/titan-template/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/materialdesignicons/css/materialdesignicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/titan-template/auth/auth.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-scroller ps ps--theme_default" data-ps-id="8f00b516-2bde-7570-1d20-84162e0aace9">
    <div class="container-fluid page-body-wapper">
        <div class="row">
            <div class="content-wrapper full-page-wrapper auth-pages login-2">
                <div class="card col-lg-4">
                    <div class="card-body px-5 py-5">
                        <div class="wrapper w-100">
                            <h3 class="card-title text-left mb-3">Login</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input id="email" type="email" class="p_input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input id="password" type="password" class="p_input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="icheck-square">
                                    <input tabindex="1" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember me</label>
                                </div>
                                <a class="btn btn-link forgot-pass" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Login') }}</button>
                            </div>
                            <a href="#" class="facebook-login btn btn-facebook">Facebook</a>
                            <a href="#" class="google-login btn btn-google">Google+</a>
                            <p class="sign-up">Don't have an Account?<a href="#">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wapper ends -->
    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 342px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
<!-- container-scroller -->
<!-- Scripts -->
<script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('plugins/popper.js/popper.min.js') }}" defer></script>
<script src="{{ asset('plugins/bootstrap/v4.0.0/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js') }}" defer></script>



</body></html>
