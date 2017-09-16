@extends('admin-lte::layouts.auth')

@section('content')
@if (session('status'))
<div class="callout callout-info">
  {{ session('status') }}
</div>
@endif

<div class="login-box-body">
  <p class="login-box-msg">Reset Password</p>

  <form action="{{ route('password.request') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      @if ($errors->has('email'))
      <span class="help-block">{{ $errors->first('email') }}</span>
      @endif
    </div>
    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      @if ($errors->has('password'))
      <span class="help-block">{{ $errors->first('password') }}</span>
      @endif
    </div>
    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required>
      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
<!-- /.form-box -->
@endsection
