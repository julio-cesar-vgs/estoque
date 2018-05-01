@extends('layout.principal')

@section('conteudo')

    <h1 align="center">Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr align="center">
            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>quantidade</td>
            <td>Ação</td>
        </tr>
        </thead>
        @foreach ($produtos as $produto)
            <tbody>
            <tr align="center" class="{{$produto->quantidade<=1 ? 'danger' : '' }}">
                <td>{{$produto->nome}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>
                    <a href="/produtos/mostra/{{$produto->id}}">
                        Visualizar
                    </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <h4>
        <span class="label label-danger pull-right">
     Um ou menos itens no estoque
    </span>
    </h4>
@stop