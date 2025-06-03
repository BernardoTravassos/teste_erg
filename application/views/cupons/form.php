<!DOCTYPE html>
<html>
<head>
    <title><?= isset($cupom) ? 'Editar' : 'Cadastrar' ?> Cupom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5"><?= isset($cupom) ? 'Editar' : 'Cadastrar' ?> Cupom</h1>

    <form method="post" action="<?= isset($cupom) ? site_url('cupons/update/'.$cupom->id) : site_url('cupons/store') ?>">

        <div class="mb-3">
            <label>Código:</label>
            <input type="text" name="codigo" class="form-control" value="<?= isset($cupom) ? $cupom->codigo : '' ?>" required>
        </div>

        <div class="mb-3">
            <label>Valor de Desconto:</label>
            <input type="number" step="0.01" name="valor_desconto" class="form-control" value="<?= isset($cupom) ? $cupom->valor_desconto : '' ?>" required>
        </div>

        <div class="mb-3">
            <label>Valor Mínimo:</label>
            <input type="number" step="0.01" name="valor_minimo" class="form-control" value="<?= isset($cupom) ? $cupom->valor_minimo : '' ?>" required>
        </div>

        <div class="mb-3">
            <label>Validade:</label>
            <input type="date" name="validade" class="form-control" value="<?= isset($cupom) ? $cupom->validade : '' ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= site_url('cupons') ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>
</html>
