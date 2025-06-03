<!DOCTYPE html>
<html>
<head>
    <title><?= isset($variacao) ? 'Editar' : 'Nova' ?> Variação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5"><?= isset($variacao) ? 'Editar' : 'Nova' ?> Variação</h1>

    <form method="post" action="<?= isset($variacao) ? site_url('variacoes/update/'.$variacao->id) : site_url('variacoes/store/'.$produto_id) ?>">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?= isset($variacao) ? $variacao->nome : '' ?>" required>
        </div>

        <div class="mb-3">
            <label>Preço Adicional:</label>
            <input type="number" step="0.01" name="preco_adicional" class="form-control" value="<?= isset($variacao) ? $variacao->preco_adicional : '0.00' ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= site_url('variacoes/index/'.(isset($variacao) ? $variacao->produto_id : $produto_id)) ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>
</html>
