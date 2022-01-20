@extends('templates.base')
@section('title', 'Visualizar produto')

@section('content')
<h1>{{ $prod->nome }}</h1>
<p>Preço: R$ {{$prod->preco}}</p>
<p>Descrição do produto: {{ $prod->descricao }}</p>
@if($prod->imagem)
<p><img style="width:50vw" src="{{asset('img/' . $prod->imagem)}}"></p>
@endif
@endsection