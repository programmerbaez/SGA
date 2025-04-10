<<<<<<< HEAD
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
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Campo para el número de documento -->
                        <div class="row mb-3">
                            <label for="document_number" class="col-md-4 col-form-label text-md-end">{{ __('Document Number') }}</label>

                            <div class="col-md-6">
                                <input id="document_number" type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number" autofocus>

                                @error('document_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo de contraseña -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Opción para recordar la sesión -->
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Botón de enviar -->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <!-- Enlace para recuperar la contraseña -->
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
</div>
@endsection
