@extends('templates.base')
@section('title', 'Mudar senha')

@section('content')

<form method="post" action="{{ route('profile.savePassword') }}">
    <div class="row">
        @csrf
        <div class="row">
            <div class="col">
                @if($erro)
                    <h3 class="text-danger">{{$erro}}</h3>
                @endif

            </div>
        </div>
        <div class='col'>
            <div class="row">
                <div class='col'>
                    <div class="row text-muted pt-3">Senha atual</div>
                    <div class="row" ><input class="form-control" type="password" type="password" name="oldPassword"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row text-muted pt-3">Nova senha</div>
                    <div class="row" ><input class="form-control" type="password" name="newPassword"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row text-muted pt-3 ">Confirme nova senha</div>
                    <div class="row" ><input class="form-control" type="password" name="newPasswordConfirm"/></div>
                    
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </div>
</form>
@endsection 