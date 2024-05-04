@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        
        @include('layouts.messages')

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            <label for="username" class="form-label">Username / Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            <label for="password" class="form-label">Password</label>
        </div>
        <div class="mb-3">
            <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
