<!DOCTYPE html>
<html>
<head>
    <title>Controle de Estoque</title>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            i></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"
    ></script>
</head>
<body>
<h1>Listagem de Produtos</h1>
<table class="table">
    <tr>
        <td>Nome</td>
        <td>Valor</td>
        <td>Descrição</td>
        <td>quantidade</td>
        <td>Ação</td>
    </tr>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td><?= $produto->nome ?></td>
            <td><?= $produto->valor ?></td>
            <td><?= $produto->descricao ?></td>
            <td><?= $produto->quantidade ?></td>
            <td>
                <a href="/produtos/mostra/id=<?= $produto->id ?>">
                    Visualizar
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</body>

</html>