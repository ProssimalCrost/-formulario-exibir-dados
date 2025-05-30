<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Dados Recebidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-secondary text-white">
        <h4>Dados Enviados</h4>
      </div>
      <div class="card-body">
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
        <a href="formulario.html" class="btn btn-primary mt-3">Voltar</a>
      </div>
    </div>
</div>
</body>
</html>
