@extends('layouts.funcionario')

@section('content')
<div class="container">
    <h2>Bienvenido, {{ Auth::user()->name }}</h2>
    <p>Has iniciado sesión como <strong>Funcionario</strong>.</p>
</div>
@endsection
