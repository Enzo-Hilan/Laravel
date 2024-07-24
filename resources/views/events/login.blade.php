@extends('layouts.main')

@section('title', 'Entrar')

@section('content')

    <h1>Entrar</h1>

    @if($nome != null || $nome != '')
        <p>Seu nome é {{ $nome }}</p>
    @else
        <p>Você ainda não possui um nome</p>
    @endif

@endsection