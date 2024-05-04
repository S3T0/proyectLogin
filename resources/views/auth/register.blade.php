@extends('layouts.auth')

@section('title', 'Registro')

@section('content')
    <h1>Registro</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        @include('layouts.messages')
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            <label for="username" class="form-label">Username</label>            
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <label for="email" class="form-label">Email</label>            
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            <label for="password" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation">
            <label for="password_confirmation" class="form-label">Password confirmation</label>
        </div>
        <div class="mb-3">
            <p>¿Tienes una cuenta? <a href="{{ route('login') }}">inicia sesion aquí</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>

@endsection
