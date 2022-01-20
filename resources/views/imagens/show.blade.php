@extends('templates.base')
@section('title', 'Visualizar Imagem')

@section('content')
<h1>{{ $img->name }}</h1>
<p>Descrição: {{$img->description}}</p>
@if($img->imagem)
<p><img style="width:50vw" src="{{asset('img/' . $img->imagem)}}"></p>
@endif
@endsection