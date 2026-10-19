<?php $sufixo = $perfil === 'plataforma' ? '' : '?perfil=' . $perfil; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?= view('includes/head') ?>
</head>
<body class="gda-dash-body">

  <?= view('includes/dash_topbar', ['perfil' => $perfil, 'aba' => 'dashboard']) ?>

  <div class="gda-wrap gda-content">

    <nav class="gda-crumb-bar">
      <a href="<?= base_url('dashboard' . $sufixo) ?>">Dashboard</a>
      <span class="gda-crumb-sep">/</span>
      <span class="gda-crumb-atual" id="crumbAtual"><?= $termos['plural'] ?></span>
    </nav>

    <div class="gda-mov-resumo">
      <span id="resumoTexto"></span>
      <button type="button" class="gda-link-btn" id="btnMarcarTodas">Marcar todas como lidas</button>
    </div>

    <div class="gda-card-white px-md-4">
      <div class="d-flex flex-wrap align-items-center gap-3 mb-4 px-md-3">
        <h2 class="gda-panel-title gda-lista-titulo mb-0" id="tituloLista"></h2>
        <div class="flex-grow-1 me-lg-4">
          <input type="text" class="gda-search" id="buscaMov" aria-label="Buscar <?= strtolower($termos['plural']) ?>">
        </div>
        <div class="d-flex gap-2" role="group" aria-label="Filtro">
          <button type="button" class="gda-filtro" data-filtro="todas">Todas</button>
          <button type="button" class="gda-filtro" data-filtro="nao-lidas">Não lidas</button>
          <button type="button" class="gda-filtro" data-filtro="lidas">Lidas</button>
        </div>
      </div>

      <div id="listaMov"
        data-movimentacoes="<?= esc(json_encode($movimentacoes, JSON_UNESCAPED_UNICODE), 'attr') ?>"
        data-termos="<?= esc(json_encode($termos, JSON_UNESCAPED_UNICODE), 'attr') ?>"
        data-url-detalhe="<?= base_url('movimentacoes/detalhes') ?>/"
        data-sufixo="<?= $sufixo ?>"></div>

      <div class="gda-vazio d-none" id="vazioMov">
        <div class="gda-modal-icon gda-icon-lg mx-auto"><i class="fa-solid fa-circle-info"></i></div>
        <h3 id="vazioTitulo"></h3>
        <p id="vazioTexto"></p>
        <button type="button" class="gda-btn gda-btn-outline gda-btn-vazio px-5" data-filtro="todas">Ver todas as <?= strtolower($termos['plural']) ?></button>
      </div>

      <div class="gda-pag" id="paginacao"></div>
    </div>
  </div>

  <script src="<?= base_url('assets/js/movimentacoes.js') ?>"></script>
</body>
</html>
