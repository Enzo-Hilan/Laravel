@extends('layouts.main')

@section('title', 'Cadstrar')

@section('content')

    <h1>Cadastrar</h1>

    @if($name != '')
        <p>Seu nome é {{$name}}</p>
    @else
        <p>Seu nome ainda não foi informado!</p>
        <p>Para informa-lo, utilize a variavel 'name' na url</p>
    @endif

@endsection