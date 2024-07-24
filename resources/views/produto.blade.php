@extends('/layouts/main')

@section('title', 'Produto')

@section('content')

    <h1>Produto</h1>

    @if($id == null)
        <p>O usúario ainda não selecionou nenhum item</p>
    @else
        <p>Produto [ID]: {{ $id  }}</p>
    @endif

@endsection