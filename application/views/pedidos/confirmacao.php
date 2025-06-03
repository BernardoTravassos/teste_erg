<!DOCTYPE html>
<html>
<head>
    <title>Pedido Confirmado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">Pedido Confirmado!</h1>

    <p>Seu pedido #<?= $pedido_id ?> foi realizado com sucesso.</p>

    <a href="<?= site_url('carrinho') ?>" class="btn btn-primary">Voltar para o Carrinho</a>

</body>
</html>
