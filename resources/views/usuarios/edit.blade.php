@extends('templates.base')
@section('title', 'Perfil')
{{-- @section('h1', 'Página de perfil') --}} 

@section('content')
<div class="row">
    <div class="col">
    </div>
</div>
<form method="post" action="{{ route('profile.saveEdit') }}">
    <div class="row">
        @csrf

            <div class='col'>
                <div class="row">
                    <div class='col'>
                        <div class="row text-muted pt-3">Nome</div>
                        <div class="row" ><input value="{{Auth::user()->nome}}" class="form-control" type="text" name="nome"/></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row text-muted pt-3">E-mail</div>
                        <div class="row" ><input class="form-control" value="{{Auth::user()->email}}" type="email" name="email"/></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row text-muted pt-3">Usuário</div>
                        <div class="row" ><input class="form-control" value="{{Auth::user()->usuario}}" type="text" name="usuario" /></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <img src="{{asset('/images/user.png')}}" style="width:25vw" alt="User"/>

            </div>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>

    </div>
</form>
@endsection 