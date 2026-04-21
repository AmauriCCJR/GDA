<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include 'includes/head.php'; ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/logo.png" alt="Bootstrap" width="90" height="68">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cotação do dia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Depoimentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Planos</a>
          </li>
        </ul>

        <div class="d-flex align-items-center">
          <div class="nav-item me-3 gda_login">
            <a class="nav-link" href="#">Entrar</a>
          </div>
          <a class="btn btn-success gda_cor_bt">Solicitar demonstração</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid gda_bg">
    <article class="container">
      <div class="row">
        <div class="col col-bg-6 col-md-6 col-sm-12">
          <h1>Gestão Completa da Documentação de Processos Aduaneiros</h1>
          <p>Centralize documentos de importação e exportação em uma unica plataforma. Simplifique sua operação e acompanhe processos em tempo real.</p>
          <a class="btn btn-success gda_cor_btn d-inline-flex align-items-center gap-2">Comece Agora<i class="fa-solid fa-arrow-right"></i></a>
          <a class="btn btn-outline-success">Saiba Mais</a>
        </div>

        <div class="col col-bg-6 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center">
          <div class="gda_services">
            <p class=""><i class="fa-regular fa-circle-check" style="color: #FF990B;"></i> Processos 100% digitalizados</p>
            <p class=""><i class="fa-regular fa-circle-check" style="color: #2563EB;"></i> Processos 100% digitalizados</p>
            <p class=""><i class="fa-regular fa-circle-check" style="color: #E4E402"></i> Processos 100% digitalizados</p>
            <p class=""><i class="fa-regular fa-circle-check" style="color: #FF0000;"></i> Processos 100% digitalizados</p>
          </div>
        </div>
      </div>


    </article>

  </div>



  <footer>





    <?php include 'includes/footer.php'; ?>
  </footer>


</body>

</html>