@extends('layout.principal')
@section('conteudo')
    <h1>Detalhes do produto: {{$produto->nome}}</h1>
    <table class="table table-striped table-houver">
        <thead align="center">
        <tr>
            <th>
                Valor:
            </th>
            <th>
                Descrição:
            </th>
            <th>
                Quantidade em estoque:
            </th>
        </tr>
        </thead>
        <tbody align="center">
        <td>R$ {{$produto->valor }}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->quantidade }}</td>
        </tbody>
    </table>
@stop