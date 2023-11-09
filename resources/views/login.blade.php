@extends('layouts.app')

@section('content')

    <div id="login">
        <div>
        </div>
        <div>
            <div class="login-center">
                <h2 class="text-center">Inicio Sesion</h2>
                <form class="vstack gap-1">
                    <input class="form-control" type="text" placeholder="Usuario">
                    <input class="form-control" type="password" placeholder="Contraseña">
                    <input class="btn btn-primary" type="submit" value="Entrar">
                </form>
            </div>
        </div>
        <div>
        </div>
    </div>

@endsection
