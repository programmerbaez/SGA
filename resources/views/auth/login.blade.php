@extends('layouts.auth')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>{{ config('app.name') }}</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesión para comenzar</p>

      <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="input-group mb-3">
              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  class="form-control @error('email') is-invalid @enderror" placeholder="Correo electrónico">
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                  </div>
              </div>
              @error('email')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="input-group mb-3">
              <input id="password" type="password" name="password" required autocomplete="current-password"
                  class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña">
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                  </div>
              </div>
              @error('password')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="row mb-3">
              <div class="col-8">
                  <div class="icheck-primary">
                      <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label for="remember">Recordarme</label>
                  </div>
              </div>
              <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
              </div>
          </div>
      </form>

      <p class="mb-1">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        @endif
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Registrarme</a>
      </p>
    </div>
  </div>
</div>
@endsection
