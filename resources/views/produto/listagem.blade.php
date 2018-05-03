@extends('layout.principal')

@section('conteudo')

    <h1 align="center">Listagem de Produtos</h1>
    <table id="tabelaDissertacoes" class="table table-striped" style="width:100%">
        <thead align="center">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Tamanho</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        @foreach ($produtos as $produto)
            <tbody>
            <tr align="center" class="{{$produto->quantidade<=1 ? 'danger' : '' }}">
                <td>{{$produto->nome}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->tamanho}}</td>
                <td>
                    <a href="/produtos/mostra/{{$produto->id}}">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a href="{{action('ProdutoController@remove',$produto->id)}}">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    @if(old('nome'))
        <div class="alert alert-success">
            O produto {{ old('nome') }} foi adicionado.
        </div>
    @endif
@stop


