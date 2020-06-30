@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="card">
                <header class="auth-header"><h1 class="auth-title">Admin</h1></header>

                <div class="auth-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="password" class="">{{ __('Password') }}</label>


                                <input type="password" class="form-control validate[required] text-input login-field  login-field-password" id="password-1" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>



                        <div class="form-group">
                            <label for="remember"><input class="checkbox" id="remember" type="checkbox"><span>Remember me</span></label>
                            @if (Route::has('password.request'))
                            <a href="reset.php" class="forgot-btn pull-right">Forgot password?</a>
                            @endif
                        </div>
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Login</button> </div>

                    </form>
                </div>

    </div>
</div>
@endsection
