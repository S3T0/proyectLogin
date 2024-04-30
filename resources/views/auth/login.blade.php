@extends('layouts.template')

@section('title', 'Login')


@section('content')
    <h1>Login</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>

    <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
@endsection
