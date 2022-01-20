@extends('templates.base')
@section('title', 'Inserir imagem')
@section('h1', 'Inserir imagem')

@section('content')
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('imagens.gravar') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="mb-3">
                <p>Foto: <input type="file" name="imagem"></p>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection