@extends('layout.principal')
@section('conteudo')
    @if (count($errors) > 0)
        <!-- Caso houver erro o sistema, enviara uma mensagem de erro amigavel ao usuario-->
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produtos/adiciona" method="post">
        <input value="{{csrf_token()}}" type="hidden" name="_token">
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" name="nome"  min="2"  max="50" maxlength="50" minlength="2">
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" minlength="2" maxlength="5">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input class="form-control" name="valor">
        </div>
        <div class="form-group">
            <label>Tamanho</label>
            <input type="text" class="form-control" name="tamanho" placeholder="Informe um tamanho XXcm x XXcm">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" placeholder="Informe aqui a descrição" rows="4" cols="2"
                      name="descricao" maxlength="5000"></textarea>
        </div>
        <button type="submit" class="btn
    btn btn-default btn-block">Submit
        </button>
    </form>
@stop