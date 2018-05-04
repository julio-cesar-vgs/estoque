@extends('layout.principal')
@section('conteudo')

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <ul>
                <li>
                    {{$error}}
                </li>
            </ul>
        </div>
    @endforeach

    <form action="/login" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <!--Parametros necessários para enviar pelo metodo 'post'-->
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Login</button>
    </form>

@stop