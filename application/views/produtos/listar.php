<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">Produtos</h1>
    <a href="<?= site_url('produtos/create') ?>" class="btn btn-primary mb-3">Novo Produto</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Nome</th><th>Preço</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto->id ?></td>
                <td><?= $produto->nome ?></td>
                <td>R$ <?= number_format($produto->preco, 2, ',', '.') ?></td>
                <td>
                    <a href="<?= site_url('produtos/edit/'.$produto->id) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= site_url('produtos/delete/'.$produto->id) ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
