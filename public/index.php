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
          <a class="btn btn-success gda_cor_btn">Solicitar demonstração</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid gda_bg">
    <article class="container">
      <div class="row align-items-center">

        <div class="col-lg-7 col-md-12 col-sm-12">
          <h1 class="display-5 fw-bold text-dark gda_title_home">
            Gestão Completa da Documentação de Processos Aduaneiros
          </h1>
          <p class="lead gda_descricao_home">
            Centralize documentos de importação e exportação em uma única plataforma.
            Simplifique sua operação e acompanhe processos em tempo real.
          </p>
          <div class="d-flex gap-2 flex-wrap">
            <a class="btn btn-success gda_cor_btn d-inline-flex align-items-center gap-2" id="comeceagr">
              Comece Agora <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a class="btn btn-outline-success">Saiba Mais</a>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 d-flex flex-column align-items-start justify-content-center gda_services gap-3 mt-4 mt-lg-0 mx-auto">
          <p class="ps-5"><i class="fa-regular fa-circle-check" id="gda_color_1"></i> Processos 100% digitalizados</p>
          <p class="ps-5"><i class="fa-regular fa-circle-check" id="gda_color_2"></i> Atualizações de status dos processos</p>
          <p class="ps-5"><i class="fa-regular fa-circle-check" id="gda_color_3"></i> Gestão de Múltiplas Empresas</p>
          <p class="ps-5"><i class="fa-regular fa-circle-check" id="gda_color_4"></i> Sistema Hierárquico</p>
        </div>
      </div>
    </article>
  </div>

  <div class="container">
    <div class="row">
      <section class="gda_color_bg mt-5 mb-5 p-2 text-center">
        <h2 class="gda_subtitle_home">Serviços Completos</h2>
        <p class="lead">Tudo o que você precisa em uma unica plataforma</p>
      </section>
    </div>


    <div class="row gda_servicos_completos">
      <section class="col col-lg-3 col-md-12 col-sm-12 gda_services_card" style="--corVariavel: #2563EB">
        <img src="../assets/img/Importar.png" class="gda_icon_home" alt="...">
        <h5 class="gda_services_card_title">Importação</h5>
        <p class="card-text">Gestão completa de processos de importação com controle de documentos e prazos</p>
      </section>
      <section class="col col-lg-3 col-md-12 col-sm-12 gda_services_card" style="--corVariavel: #00806a">
        <img src="../assets/img/Exportar.png" class="gda_icon_home" alt="...">
        <h5 class="gda_services_card_title">Exportação</h5>
        <p class="card-text">Acompanhamento de exportações com validação de documentos</p>
      </section>
      <section class="col col-lg-3 col-md-12 col-sm-12 gda_services_card" style="--corVariavel: #FFCD29">
        <img src="../assets/img/Banco.png" class="gda_icon_home" alt="...">
        <h5 class="gda_services_card_title">Armazenamento</h5>
        <p class="card-text">Controle digital de armazenagem e movimentação de cargas</p>
      </section>
      <section class="col col-lg-3 col-md-12 col-sm-12 gda_services_card" style="--corVariavel: #FF0000">
        <img src="../assets/img/Pessoa.png" class="gda_icon_home" alt="...">
        <h5 class="gda_services_card_title">Consultoria</h5>
        <p class="card-text">Suporte especializado para otimizar suas operações aduaneiras</p>
      </section>
    </div>
  </div>

  <div class="container-fluid cotacao">
    <section class="container">
      <div class="row">
        <div>
          <h2>Cotação em Tempo Real</h2>
          <p class="lead"> Acompanhe aqui as principais moedas para suas operações</p>
        </div>
      </div>

      <div class="row justify-content-center gap-2">
          <div class="col-lg-2 col-md-4 col-12">
            <div class="gda_cotacao_card">
              <h5 class="gda_cotacao_title">Dólar - USD</h5>
              <p class='gda_cotacao_valor'>R$: <?php echo CotacaoAtual('USD-BRL'); ?></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-12">
            <div class="gda_cotacao_card">
              <h5 class="gda_cotacao_title">Euro - EUR</h5>
              <p class='gda_cotacao_valor'>R$: <?php echo CotacaoAtual('EUR-BRL'); ?></p>
            </div>
          </div>


          <div class="col-lg-2 col-md-4 col-12">
            <div class="gda_cotacao_card">
              <h5 class="gda_cotacao_title">Guaranies - PYG</h5>
              <p class='gda_cotacao_valor'>R$: <?php echo CotacaoAtual('PYG-BRL'); ?></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-12">
            <div class="gda_cotacao_card">
              <h5 class="gda_cotacao_title">Libras Esterfinas - GBP</h5>
              <p class='gda_cotacao_valor'>R$: <?php echo CotacaoAtual('GBP-BRL'); ?></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-12">
            <div class="gda_cotacao_card">
              <h5 class="gda_cotacao_title">Dolar Canadense</h5>
              <p class='gda_cotacao_valor'>R$: <?php echo CotacaoAtual('CAD-BRL'); ?></p>
            </div>
          </div>

        </div>
      </div>

    </section>
  </div>










  <footer>
    <?php include 'includes/footer.php'; ?>
  </footer>


</body>

</html>