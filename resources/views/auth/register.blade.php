@extends('layouts.template')

@section('title', 'Registro')


@section('content')
    <h1>Registro</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="username">Usuario</label>
        <input type="text" name="username">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password_confirmation">Password confirmation</label>
        <input type="password" name="password_confirmation">
        <input type="submit" value="Registrarse">
    </form>
    <p>¿Tienes una cuenta? <a href="{{ route('login') }}">inicia sesion aquí</a></p>
@endsection