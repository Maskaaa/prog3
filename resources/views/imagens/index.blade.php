@extends('templates.base')
@section('title', 'Galeria')
@section('h1', 'Página de Galeria')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de Galeria</p>
        <a class="btn btn-primary" href="{{route('imagens.inserir')}}" role="button">Cadastrar imagem</a>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div class="row">
            @foreach($imgs as $img)
                <div class="col-md-4">
                    <a href="{{ route('imagens.show', $img) }}">
                        <img src="{{asset('img/' . $img->imagem)}}" style="width:20vw" alt="Imagem">
                    </a>
                    <h1>{{ $img->name }}</h1>
                    <p><b>Descrição:</b>{{$img->description}}</p>
                    <span>
                        
                        <a href="{{ route('imagens.edit', $img) }}" class="btn btn-primary btn-sm">Editar</a>
                        @if (Auth::user()->admin)
                        <a href="{{ route('imagens.remove', $img) }}" class="btn btn-primary btn-sm btn-danger">Apagar</a>
                        @endif
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
