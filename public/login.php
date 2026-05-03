<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body class="gda_login_page">

  <div class="gda_login_wrapper">
    <div class="text-center mb-4">
      <a href="../index.php">
        <img src="../assets/img/logo.png" alt="GDA" class="gda_login_logo">
      </a>
      <p class="gda_login_subtitle">Gestão de Processos Aduaneiros</p>
    </div>

    <div class="gda_login_card">
      <h2 class="gda_login_title">Acesse sua Conta</h2>

      <div class="mb-3">
        <label class="form-label gda_form_label">E-mail</label>
        <div class="gda_input_icon_wrap">
          <i class="fa-regular fa-envelope gda_input_icon"></i>
          <input type="email" class="form-control gda_login_input" placeholder="seu@email.com">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label">Senha</label>
        <div class="gda_input_icon_wrap">
          <i class="fa-solid fa-lock gda_input_icon"></i>
          <input type="password" class="form-control gda_login_input gda_input_with_icon_right" id="senhaInput" placeholder="Digite sua senha aqui">
          <button type="button" class="gda_toggle_senha" onclick="toggleSenha()">
            <i class="fa-regular fa-eye" id="olhoIcon"></i>
          </button>
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="lembrarMe">
          <label class="form-check-label gda_check_label" for="lembrarMe">Lembrar-me</label>
        </div>
        <a href="#" class="gda_forgot_link">Esqueci minha senha</a>
      </div>

      <button class="btn btn-success w-100 gda_btn_login gda_cor_btn">Entrar</button>

      <hr class="gda_login_divider">

      <p class="text-center gda_no_access_text">Ainda não tem acesso?</p>
      <a href="registro.php" class="btn btn-outline-success w-100 gda_btn_solicitar">Solicitar Acesso</a>
    </div>

    <div class="text-center mt-4">
      <a href="../index.php" class="gda_back_link">
        <i class="fa-solid fa-chevron-left me-1"></i> Voltar para o site
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    
  </script>
</body>
</html>
