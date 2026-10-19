<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redefinir Senha - GDA</title>
  <?php include 'includes/head.php' ?>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/senha.css') ?>">

</head>
<body>

<div class="wrapper">

  <!-- Logo -->
  <div class="logo-area">
    <!-- SVG do logo GDA (simplificado) -->
    <img src="<?= base_url('assets/img/logo.png') ?>">
    <p>Gestão de Processos Aduaneiros</p>
  </div>

  <!-- Card -->
  <div class="card-gda">

    <!-- Ícone cadeado -->
    <div class="lock-icon">
      <i class="fa-solid fa-lock"></i>
    </div>

    <h1 class="card-title">Redefinir senha</h1>
    <p class="card-subtitle">Crie uma nova senha segura para sua conta GDA.</p>
    <form id="formRedefinir" action="<?= base_url('senha-alterada') ?>" method="post">
    <!-- Campo: nova senha -->
    <div class="mb-1">
      <label class="form-label" for="novaSenha">Senha</label>
      <div class="input-wrap">
        <i class="fa-solid fa-lock icon-left"></i>
        <input type="password" id="novaSenha" placeholder="Digite sua nova senha" autocomplete="new-password">
        <button class="toggle-pw" type="button" onclick="togglePw('novaSenha', this)" tabindex="-1">
          <i class="fa-regular fa-eye"></i>
        </button>
      </div>

      <!-- Barra de força -->
      <div class="strength-bar-wrap" id="strengthBars">
        <div class="bar" id="bar1"></div>
        <div class="bar" id="bar2"></div>
        <div class="bar" id="bar3"></div>
        <div class="bar" id="bar4"></div>
      </div>
      <div class="strength-label" id="strengthLabel"></div>

      <!-- Requisitos -->
      <div class="req-box">
        <p>Sua senha precisa ter:</p>
        <div class="req-item" id="req-len">
          <span class="req-dot"></span> Mínimo de 8 caracteres
        </div>
        <div class="req-item" id="req-upper">
          <span class="req-dot"></span> Uma letra maiúscula
        </div>
        <div class="req-item" id="req-num">
          <span class="req-dot"></span> Um número
        </div>
        <div class="req-item" id="req-special">
          <span class="req-dot"></span> Um caractere especial (%&*$# …)
        </div>
      </div>
    </div>

    <!-- Campo: confirmar senha -->
    <div class="mt-3">
      <label class="form-label" for="confirmarSenha">Confirmar senha</label>
      <div class="input-wrap">
        <i class="fa-solid fa-lock icon-left"></i>
        <input type="password" id="confirmarSenha" placeholder="Repita sua nova senha" autocomplete="new-password">
        <button class="toggle-pw" type="button" onclick="togglePw('confirmarSenha', this)" tabindex="-1">
          <i class="fa-regular fa-eye"></i>
        </button>
      </div>
      <div class="mismatch-msg" id="mismatchMsg">
        <i class="fa-solid fa-circle-exclamation me-1"></i>As senhas não coincidem.
      </div>
    </div>

    <!-- Botão -->
    <button class="btn-gda" type="submit">Salvar nova senha</button>
</form>
    <!-- Voltar ao login -->
    <div class="back-link">
      Lembrou sua senha? <a href="<?= base_url('login') ?>">Voltar ao login</a>
    </div>

  </div>
</div>

<script src="<?= base_url('assets/js/redefinir_senha.js') ?>"></script>

</body>
</html>
