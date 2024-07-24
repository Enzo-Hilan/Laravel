@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>Produtos</h1>

    @if($busca != '')
        <p>O usúario esta buscando {{ $busca }}</p>
    @else
        <p>O usuário ainda não buscou nada</p>
    @endif

    <a href="/contact">Contato</a>
    <a href="/produtos">Produtos</a>
    <a href="/">Home</a>

@endsection