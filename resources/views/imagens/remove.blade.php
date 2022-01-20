@extends('templates.base')
@section('title', 'Remover imagem')
@section('h1', 'Remover imagem')

@section('content')
<div class="row">
    <div class="col">

        <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>Cuidado!</strong> Você está prestes a remover o imagem!
        </div>

        <p>imagem: {{$img->name}}</p>
        <p>Você tem certeza que deseja apagar este imagem para sempre?</p>

        <form method="post" action="{{ route('imagens.delete', $img) }}">
            @csrf
            @method('delete')
            
            <input type="submit" class="btn btn-danger" value="Pode apagar sem medo">
            <a href="{{ route('imagens') }}" class="btn btn-secondary">Desculpa, eu cliquei errado!</a>
        </form>

        

    </div>
</div>
@endsection