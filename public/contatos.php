<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="../assets/img/logo.png" alt="GDA" width="90" height="68">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
          <li class="nav-item"><a class="nav-link gda_nav_active" href="contatos.php">Contatos</a></li>
          <li class="nav-item"><a class="nav-link" href="duvidas_frequentes.php">Dúvidas Frequentes</a></li>
          <li class="nav-item"><a class="nav-link" href="termos_de_uso.php">Termos de Uso</a></li>
          <li class="nav-item"><a class="nav-link" href="politica_de_privacidade.php">Política de Privacidade</a></li>
        </ul>
        <div class="d-flex align-items-center">
          <div class="nav-item me-3 gda_login">
            <a class="nav-link" href="mf/login.php">Entrar</a>
          </div>
          <a class="btn btn-success gda_cor_btn" href="mf/registro.php">Solicitar Demonstração</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="gda_breadcrumb_bar">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb gda_breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item active">Contatos</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h1 class="gda_title_home">Entre em Contato</h1>
        <p class="text-muted">Estamos aqui para ajudar. Escolha o canal mais conveniente para você.</p>
      </div>
    </div>

    <div class="row justify-content-center g-4 pb-5">

      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda_contact_card">
          <div class="gda_contact_icon_wrap">
            <i class="fa-regular fa-envelope gda_contact_icon"></i>
          </div>
          <h5 class="gda_contact_title">E-mail</h5>
          <p class="gda_contact_desc">Envie suas dúvidas ou sugestões para nossa equipe de suporte.</p>
          <a href="mailto:email@gda.com" class="gda_contact_link">email@gda.com</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda_contact_card">
          <div class="gda_contact_icon_wrap">
            <i class="fa-solid fa-phone gda_contact_icon"></i>
          </div>
          <h5 class="gda_contact_title">Telefone/Whatsapp</h5>
          <p class="gda_contact_desc">Ligue para nosso suporte de segunda a sexta, das 9h às 18h.</p>
          <a href="tel:08001231234" class="gda_contact_link">0800 123 1234</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda_contact_card">
          <div class="gda_contact_icon_wrap">
            <i class="fa-solid fa-location-dot gda_contact_icon"></i>
          </div>
          <h5 class="gda_contact_title">Endereço</h5>
          <p class="gda_contact_desc">Todo o suporte e atendimento é realizado de forma online.</p>
          <span class="gda_contact_link">Avenida Brigadeiro Faria Lima, 3477 – Torre B, 12º andar</span>
        </div>
      </div>

    </div>
  </div>

  <footer class="container-fluid text-center">
    <?php include 'includes/footer.php'; ?>
  </footer>
</body>
</html>
