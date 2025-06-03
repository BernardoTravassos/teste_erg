<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">Carrinho de Compras</h1>

    <?php if($carrinho): ?>
        <form method="post" action="<?= site_url('carrinho/atualizar') ?>">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach($carrinho as $item): ?>
                        <tr>
                            <td><?= $item['name'] ?></td>
                            <td>R$ <?= number_format($item['price'], 2, ',', '.') ?></td>
                            <td>
                                <input type="number" name="qty<?= $i ?>" value="<?= $item['qty'] ?>" min="1" class="form-control" style="width: 80px;">
                            </td>
                            <td>R$ <?= number_format($item['subtotal'], 2, ',', '.') ?></td>
                            <td>
                                <a href="<?= site_url('carrinho/remover/'.$item['rowid']) ?>" class="btn btn-danger btn-sm">Remover</a>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Atualizar Carrinho</button>
            <a href="<?= site_url('carrinho/limpar') ?>" class="btn btn-warning">Limpar Carrinho</a>

        </form>

        <h3 class="mt-3">Total: R$ <?= number_format($this->cart->total(), 2, ',', '.') ?></h3>

        <a href="<?= site_url('pedidos/finalizar') ?>" class="btn btn-success mt-3">Finalizar Pedido</a>

    <?php else: ?>
        <p>O carrinho está vazio.</p>
    <?php endif; ?>

</body>
</html>
