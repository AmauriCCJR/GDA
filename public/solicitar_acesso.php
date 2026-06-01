<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body class="gda_login_page">

  <div class="gda_login_wrapper container">
    <div class="text-center mb-4">
      <a href="index.php">
        <img src="../assets/img/logo.png" alt="GDA" class="gda_login_logo">
      </a>
      <p class="gda_login_subtitle">Gestão de Processos Aduaneiros</p>
    </div>

    <div class="gda_login_card gda_registro_card">
      <form id="SA_whatsappForm">
          <div class="esconder" id="SA_erros_form">
            <p class="esconder erro_header" id="SA_erro_header"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Campos Incorretos ou vazios</p>
            <p class="esconder" id="SA_erros_text">erros</p>
          </div>
      
      <div class="mb-3">
        <label class="form-label gda_form_label" for="SA_nome">Nome Completo</label>
        <input type="text" class="form-control gda_login_input" placeholder="" id="SA_nome" name="SA_nome">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label" for="SA_email">E-mail</label>
        <input type="email" class="form-control gda_login_input" placeholder="" id="SA_email" name="SA_email">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label" for="SA_empresa">Empresa</label>
        <input type="text" class="form-control gda_login_input" placeholder="" id="SA_empresa" name="SA_empresa">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label" for="SA_doc">CPF/CNPJ</label>
        <input type="text" class="form-control gda_login_input" placeholder="" id="SA_doc" name="SA_doc">
      </div>

      <div class="mb-3">
        <label class="form-label gda_form_label" for="SA_telefone">Telefone</label>
        <input type="tel" class="form-control gda_login_input" placeholder="" id="SA_telefone" name="SA_telefone">
      </div>

      <div class="mb-4">
        <label class="form-label gda_form_label" for="SA_msg">Mensagem</label>
        <textarea class="form-control gda_login_input gda_textarea" rows="4" placeholder="" id="SA_msg" name="SA_msg"></textarea>
      </div>

      <button type="button" class="btn btn-success w-100 gda_btn_login gda_cor_btn sa_enviar" onclick="solicitarAcesso()">
        <i class="fa-brands fa-whatsapp me-2 "></i> Enviar via Whatsapp
      </button>
      </form>
    </div>
    

    <div class="text-center mt-4">
      <a href="index.php" class="gda_back_link">
        <i class="fa-solid fa-chevron-left me-1"></i> Voltar para tela inicial
      </a>
    </div>
  </div>

  
</body>
</html>
