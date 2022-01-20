@extends('templates.base')
@section('title', 'Perfil')
{{-- @section('h1', 'Página de perfil') --}} 

@section('content')

<div class="row">
    <div class='col d-flex flex-column align-items-center'>
        <div class="row">
            <div class='col'>
                <img src="{{asset('/images/user.png')}}" style="width:15vw" alt="User"/>
            </div>
        </div>
        <div class="row">
            <div class='col'>
                <h1>{{Auth::user()->nome}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row text-muted pt-3">E-mail</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row" ><h4>{{Auth::user()->email}}</h4></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row text-muted pt-3">Usuário</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row" ><h4>{{Auth::user()->usuario}}</h4></div>
            </div>
        </div>
        <div class="row">
            <div class="col pt-3">
                <a href="{{route('profile.edit')}}"><button  class="btn btn-primary">Editar</button></a>    
            </div>
        </div>
        <div class="col pt-3">
        <a href="{{route('profile.password')}}"><button  class="btn btn-danger">Editar senha</button></a>    
        </div>
    </div>
</div>
@endsection