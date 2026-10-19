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
      <a href="<?= base_url('movimentacoes' . $sufixo) ?>"><?= $termos['plural'] ?></a>
      <span class="gda-crumb-sep">/</span>
      <span class="gda-crumb-atual">Detalhes</span>
    </nav>

    <article class="gda-mov-det" id="detalheMov" data-id="<?= (int) $movimentacao['id'] ?>">
      <div class="gda-mov-det-head">
        <div class="gda-notif-icon-wrap"><i class="fa-solid fa-bell"></i></div>
        <div>
          <h2><?= esc($movimentacao['titulo']) ?></h2>
          <div class="gda-mov-det-sub"><?= esc($movimentacao['titulo']) ?> — <?= esc($movimentacao['empresa']) ?></div>
        </div>
      </div>

      <div class="gda-mov-det-body">
        <h3>Descrição</h3>
        <p class="gda-mov-det-texto"><?= esc($movimentacao['descricao']) ?></p>

        <div class="row mt-4">
          <div class="col-md-4 col-6 mb-3">
            <div class="gda-field-label">Empresa</div>
            <div class="gda-field-value"><?= esc($movimentacao['empresa']) ?></div>
          </div>
          <div class="col-md-4 col-6 mb-3">
            <div class="gda-field-label">Processo Vinculado</div>
            <div class="gda-field-value"><?= esc($movimentacao['processo']) ?></div>
          </div>
          <div class="col-md-4 col-12 mb-3">
            <div class="gda-field-label">Data</div>
            <div class="gda-field-value"><?= esc($movimentacao['data']) ?></div>
          </div>
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="<?= base_url('movimentacoes' . $sufixo) ?>" class="gda-btn gda-btn-outline gda-btn-largo">Voltar para lista de <?= strtolower($termos['plural']) ?></a>
          <a href="#" class="gda-btn gda-btn-outline gda-btn-largo" title="Página de processos em desenvolvimento">Ver processo vinculado</a>
        </div>
      </div>
    </article>
  </div>

  <script src="<?= base_url('assets/js/detalhe_movimentacao.js') ?>"></script>
</body>
</html>
