@extends('layout.principal')
@section('conteudo')
    <h1 align="center">Detalhes do produto: {{$produto->nome}}</h1>
    <table class="table table-striped table-houver">
        <thead align="center">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Tamanho</th>
        </tr>
        </thead>
        <tbody align="center">
        <td>{{$produto->nome}}</td>
        <td>{{$produto->valor}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->quantidade}}</td>
        <td>{{$produto->tamanho}}</td>
        </tbody>
    </table>
@stop