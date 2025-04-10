@extends('layouts.aprendiz')

@section('content')
<div class="container">
    <h2>Bienvenido, {{ Auth::user()->name }}</h2>
    <p>Has iniciado sesión como <strong>Aprendiz</strong>.</p>
</div>
@endsection
