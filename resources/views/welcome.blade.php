@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Hello world Laravel</h1>

    <p>Seu nome é {{ $nome }}, você atua como {{ $profissao }} e tem {{ $age }} anos</p>

    @for($i = 0; $i < count($pessoas); $i++)
        <p>Indíce[{{ $i }}]: {{ $pessoas[$i] }}</p>
    @endfor

    @foreach($cidades as $cidade)
        <p>Cidade [UF]: {{ $cidade }}</p>
    @endforeach

    <a href="/contact">Contato</a>
    <a href="/produtos">Produtos</a>
    <a href="/">Home</a>
@endsection