<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body class="gda_login_page">

  <div class="gda_login_wrapper">
    <div class="text-center mb-4">
      <a href="index.php">
        <img src="../assets/img/logo.png" alt="GDA" class="gda_login_logo">
      </a>
      <p class="gda_login_subtitle">Gestão de Processos Aduaneiros</p>
    </div>

    <div class="gda_login_card">
      <h2 class="gda_login_title">Recuperar Senha</h2>
      <p class="gda_recover_desc">Digite seu e-mail para receber instruções</p>

      <div class="mb-4">
        <label class="form-label gda_form_label">E-mail</label>
        <div class="gda_input_icon_wrap">
          <i class="fa-regular fa-envelope gda_input_icon"></i>
          <input type="email" class="form-control gda_login_input gda_input_with_icon_right" placeholder="seu@email.com">
        </div>
      </div>

      <button class="btn btn-success w-100 gda_btn_login gda_cor_btn">Enviar</button>

      <div class="text-center mt-4">
        <a href="login.php" class="gda_back_link">
          <i class="fa-solid fa-chevron-left me-1"></i> Voltar para o login
        </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
