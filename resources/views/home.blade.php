@extends('layouts.template')

@section('title', 'HOME')


@section('content')
    <h1>Bienvenido, {{ Auth::user()->username }}</h1>
    <a href="{{ route('logout') }}">Cerrar sesión</a>
@endsection
