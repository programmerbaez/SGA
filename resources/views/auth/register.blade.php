@extends('layouts.auth')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="{{ url('/') }}"><b>{{ config('app.name') }}</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrar una nueva cuenta</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group mb-3">
          <input id="nickname" type="text" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus
            class="form-control @error('nickname') is-invalid @enderror" placeholder="Nickname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
            <span class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
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
          <input id="password" type="password" name="password" required autocomplete="new-password"
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

        <div class="input-group mb-3">
          <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
            class="form-control" placeholder="Confirmar contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- Menú desplegable para rol -->
        <div class="input-group mb-3">
          <select id="role_id" name="role_id" required class="form-control @error('role_id') is-invalid @enderror">
            <option value="">Seleccione un rol</option>
            @foreach($roles as $role)
              <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                {{ $role->role_name }}
              </option>
            @endforeach
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-tag"></span>
            </div>
          </div>
          @error('role_id')
            <span class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="row">
          <div class="col-8">
            <a href="{{ route('login') }}" class="text-center">Ya tengo una cuenta</a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
