@extends('templates.base')
@section('title', 'Recados')
@section('h1', 'Página de Recados')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de recados</p>

        <a class="btn btn-primary" href="{{route('recados.inserir')}}" role="button">Cadastrar recado</a>
    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>Nome</th>
            <th width="50%">Preço</th>
            <th>Gerenciar</th>
        </tr>

        {{-- recebe todos os recados da controller e passa por cada um --}}
        @foreach($recados as $recado)
        <tr>
                    <td>
                        <a href="{{ route('recados.show', $recado) }}">{{$recado->nome}}</a>
                    </td>
                    <td>{{$recado->comentario}}</td>
                    <td>
                        @if (Auth::user()->admin)
                            <a href="{{ route('recados.edit', $recado) }}" class="btn btn-primary btn-sm" role="button"><i class="bi bi-pencil-square"></i> Editar</a>
                        @endif
                        <a href="{{ route('recados.remove', $recado) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash"></i> Apagar</a>
                    </td>
                </tr>
        @endforeach
    </table>
</div>
@endsection
