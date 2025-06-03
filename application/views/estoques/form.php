<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Estoque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">Gerenciar Estoque - <?= $variacao->nome ?></h1>

    <form method="post" action="<?= site_url('estoques/store/'.$variacao->id) ?>">
        <input type="hidden" name="produto_id" value="<?= $variacao->produto_id ?>">

        <div class="mb-3">
            <label>Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" value="<?= isset($estoque) ? $estoque->quantidade : '0' ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= site_url('variacoes/index/'.$variacao->produto_id) ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>
</html>
