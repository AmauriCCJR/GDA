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

    <div class="gda_login_card gda_registro_card">

      <div class="mb-3">
        <label class="form-label gda_form_label">Nome Completo</label>
        <input type="text" class="form-control gda_login_input" placeholder="">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label">E-mail</label>
        <input type="email" class="form-control gda_login_input" placeholder="">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label">Empresa</label>
        <input type="text" class="form-control gda_login_input" placeholder="">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label">CPF/CNPJ</label>
        <input type="text" class="form-control gda_login_input" placeholder="">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label">Telefone</label>
        <input type="tel" class="form-control gda_login_input" placeholder="">
      </div>

      <div class="mb-4">
        <label class="form-label gda_form_label">Geral</label>
        <textarea class="form-control gda_login_input gda_textarea" rows="4" placeholder=""></textarea>
      </div>

      <button class="btn btn-success w-100 gda_btn_login gda_cor_btn" onclick="enviarWhatsApp()">
        <i class="fa-brands fa-whatsapp me-2"></i> Enviar via Whatsapp
      </button>
    </div>

    <div class="text-center mt-4">
      <a href="login.php" class="gda_back_link">
        <i class="fa-solid fa-chevron-left me-1"></i> Voltar para o Login
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function enviarWhatsApp() {
      alert('Redirecionando para o WhatsApp...');
    }
  </script>
</body>
</html>
