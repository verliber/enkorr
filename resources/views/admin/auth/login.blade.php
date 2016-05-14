@extends('admin.auth')

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="http://runsite.com.ua" target="_blank"><b>runsite</b>::CMS</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Увійдіть в систему, щоб розпочати роботу</p>
    <form role="form" method="POST" action="{{ route('admin.auth.signin') }}">
      {!! csrf_field() !!}

      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="Пароль">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Запамятати мене
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Увійти</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{-- <a href="href="{{ url('/password/reset') }}"">Відновити пароль</a> --}}
  </div>
</div>


@endsection
