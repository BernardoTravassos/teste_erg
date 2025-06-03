<!DOCTYPE html>
<html>
<head>
    <title><?= isset($produto) ? 'Editar' : 'Novo' ?> Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5"><?= isset($produto) ? 'Editar' : 'Novo' ?> Produto</h1>

    <form method="post" action="<?= isset($produto) ? site_url('produtos/update/'.$produto->id) : site_url('produtos/store') ?>">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?= isset($produto) ? $produto->nome : '' ?>" required>
        </div>

        <div class="mb-3">
            <label>Preço:</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="<?= isset($produto) ? $produto->preco : '' ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= site_url('produtos') ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>
</html>
