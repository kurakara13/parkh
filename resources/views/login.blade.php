@extends('layouts.app_login')

@section('content')
<div class="limiter">
  <div class="container-login100">
    <div class="login100-more" style="background-image: url('../images/garasi3.jpg');"></div>

    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50 sign">
      <form class="login100-form validate-form" method="POST" action="{{ route('member.login.submit') }}">
        {{ csrf_field() }}

        <span class="login100-form-title p-b-59">
          Sign In
        </span>

        <div class="wrap-input100 validate-input{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Email</span>
          <input id="email" type="email" class="input100"  name="email" value="{{ old('email') }}" required autofocus placeholder="Email addess...">
          <span class="focus-input100"></span>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <span class="label-input100">Password</span>
          <input id="password" type="password" class="input100" name="password" required placeholder="*************">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
              Sign in
            </button>
          </div>

          <a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
            Sign Up
            <i class="fa fa-long-arrow-right m-l-5"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
