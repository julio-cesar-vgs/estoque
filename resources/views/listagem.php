<!DOCTYPE html>
<html>
<head>
    <title>Controle de Estoque</title>
</head>
<body>
<h1>Listagem de Produtos</h1>
<table>
    <tr>
        <td>Nome</td>
        <td>Valor</td>
        <td>Descrição</td>
        <td>quantidade</td>
    </tr>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td><?= $produto->nome ?></td>
            <td><?= $produto->valor ?></td>
            <td><?= $produto->descricao ?></td>
            <td><?= $produto->quantidade ?></td>
        </tr>
    <?php endforeach ?>
</table>
</body>

</html>