<!DOCTYPE html>
<html>
<head>
    <title>Variações</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">Variações</h1>
    <a href="<?= site_url('variacoes/create/'.$produto_id) ?>" class="btn btn-primary mb-3">Nova Variação</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Nome</th><th>Preço Adicional</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($variacoes as $v): ?>
            <tr>
                <td><?= $v->id ?></td>
                <td><?= $v->nome ?></td>
                <td>R$ <?= number_format($v->preco_adicional, 2, ',', '.') ?></td>
                <td>
                    <a href="<?= site_url('variacoes/edit/'.$v->id) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= site_url('variacoes/delete/'.$v->id) ?>" class="btn btn-danger btn-sm">Excluir</a>
                    <a href="<?= site_url('estoques/manage/'.$v->id) ?>" class="btn btn-info btn-sm">Estoque</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= site_url('produtos') ?>" class="btn btn-secondary">Voltar aos Produtos</a>

</body>
</html>
