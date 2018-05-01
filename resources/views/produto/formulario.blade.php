@extends('layout.principal')

@section('conteudo')
    <form action="/produtos/adiciona" method="post">
        <input value="{{csrf_token()}}" type="hidden" name="_token">
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" name="nome" minlength="2" maxlength="30">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" placeholder="Informe aqui a descrição" rows="4" cols="2"
                      name="descricao"></textarea>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input class="form-control" name="valor">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade">
        </div>
        <button type="submit" class="btn
    btn btn-default btn-block">Submit
        </button>
    </form>
@stop