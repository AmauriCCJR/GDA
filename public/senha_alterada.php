<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senha Alterada — GDA</title>
  <?php include 'includes/head.php' ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/email_confir.css">
</head>
<body>


  <!-- Logo -->
  <div class="d-flex flex-column align-items-center gap-2 mb-4">
    <div class="">
      <img src="../assets/img/logo.png">
    </div>
    <span class="logo-name">Gestão de Processos Aduaneiros</span>
  </div>

  <!-- Card -->
  <div class="gda-card">

    <!-- Ícone -->
    <div class="icon-circle">
      <i class="fa-solid fa-lock" aria-hidden="true"></i>
    </div>

    <!-- Título -->
    <h1 class="card-title-gda mb-2">Senha alterada com sucesso</h1>

    <!-- Subtítulo -->
    <p class="card-sub mb-0">
      Sua senha foi atualizada com sucesso.<br>
      Você já pode acessar sua conta com a nova senha.
    </p>

    <hr class="gda-divider">

    <!-- Botão -->
    <a href="login.php" class="btn-gda">
      Fazer Login
    </a>

    <!-- Rodapé -->
    <p class="card-footer-gda mt-3 mb-0">
      Precisa de ajuda? <a href="duvidas_frequentes.php">Acesse dúvidas frequentes</a>
    </p>

  </div>


</body>
</html>
