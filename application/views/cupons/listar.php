<!DOCTYPE html>
<html>
<head>
    <title>Cupons</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">Cupons</h1>

    <a href="<?= site_url('cupons/create') ?>" class="btn btn-primary mb-3">Novo Cupom</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Desconto</th>
                <th>Mínimo</th>
                <th>Validade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cupons as $c): ?>
                <tr>
                    <td><?= $c->id ?></td>
                    <td><?= $c->codigo ?></td>
                    <td>R$ <?= number_format($c->valor_desconto, 2, ',', '.') ?></td>
                    <td>R$ <?= number_format($c->valor_minimo, 2, ',', '.') ?></td>
                    <td><?= $c->validade ?></td>
                    <td>
                        <a href="<?= site_url('cupons/edit/'.$c->id) ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="<?= site_url('cupons/delete/'.$c->id) ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
