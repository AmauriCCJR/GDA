<?php
$colunas = [2 => 'col-lg-6 col-12', 3 => 'col-lg-4 col-md-6 col-12'];
$coresStatus = ['Concluído' => 'gda-dot-green', 'Em andamento' => 'gda-dot-yellow', 'Cancelado' => 'gda-dot-red'];
$rotulosBadge = ['andamento' => 'Em Andamento', 'concluido' => 'Concluído', 'cancelado' => 'Cancelado'];
$config = config("Perfis");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?= view('includes/head') ?>
</head>
<body class="gda-dash-body">

  <?= view('includes/dash_topbar', ['perfil' => $perfil, 'aba' => 'dashboard', 'abasLocais' => true]) ?>

  <div class="gda-wrap gda-content">

    <section class="gda-aba-painel" data-painel="dashboard">

    <?php if ($indicadores): ?>
    <div class="row g-4 mb-4">
      <?php foreach ($indicadores as [$icone, $rotulo, $valor]): ?>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda-stat-card">
          <div class="gda-stat-icon"><i class="<?= $icone ?>"></i></div>
          <div>
            <div class="gda-stat-label"><?= $rotulo ?></div>
            <div class="gda-stat-value"><?= $valor ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php foreach ($linhas as $i => $widgets): ?>
    <div class="row g-4<?= $i < count($linhas) - 1 ? ' mb-4' : '' ?>">
      <?php foreach ($widgets as $widget): ?>
      <div class="<?= $colunas[count($widgets)] ?>">

        <?php if ($widget === 'cotacoes'): ?>
        <div class="gda-panel">
          <div class="gda-panel-title">Cotações em Tempo Real</div>
          <div class="gda-cotacao-grid">
            <?php foreach (['usd' => ['Dólar - USD', '0,00'], 'eur' => ['Euro - EUR', '0,00'], 'gbp' => ['Libras Esterlinas - LBS', '0,00'], 'pyg' => ['Guaranies - Gs', '0,00000']] as $moeda => [$nome, $valor]): ?>
            <div class="gda-cotacao-item">
              <div class="gda-cotacao-label"><?= $nome ?></div>
              <div class="gda-cotacao-valor">R$ <span id="cotacao-<?= $moeda ?>"><?= $valor ?></span></div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="gda-cotacao-dots">
            <span class="gda-cotacao-dot"></span>
            <span class="gda-cotacao-dot active"></span>
            <span class="gda-cotacao-dot"></span>
          </div>
        </div>

        <?php elseif ($widget === 'ranking'): ?>
        <div class="gda-panel">
          <div class="gda-panel-title"><?= $ranking['titulo'] ?></div>
          <?php foreach ($ranking['itens'] as $nome => $qtd): ?>
          <div class="gda-top-item">
            <div class="gda-top-item-left"><span class="gda-dot-green"></span> <?= esc($nome) ?></div>
            <span class="gda-top-badge"><?= $qtd ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <?php elseif ($widget === 'status'): ?>
        <div class="gda-panel">
          <div class="gda-panel-title">Processos por Status</div>
          <?php foreach ($status as $rotulo => $qtd): ?>
          <div class="gda-status-item">
            <div class="gda-top-item-left"><span class="<?= $coresStatus[$rotulo] ?>"></span> <?= $rotulo ?></div>
            <span class="gda-status-count"><?= $qtd ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <?php elseif ($widget === 'semana'): ?>
        <div class="gda-panel">
          <div class="gda-panel-title">Processos por dia da semana</div>
          <?php $maximo = max($semana); foreach ($semana as $dia => $qtd): ?>
          <div class="gda-bar-row">
            <span class="gda-bar-label"><?= $dia ?></span>
            <div class="gda-bar-track"><div class="gda-bar-fill" data-largura="<?= round($qtd / $maximo * 74) ?>"><?= $qtd ?></div></div>
          </div>
          <?php endforeach; ?>
        </div>

        <?php elseif ($widget === 'recentes'): ?>
        <div class="gda-panel">
          <div class="gda-panel-title mt-2<?= $recentesPreenchidos ? ' text-dark' : '' ?>">Processos Recentes</div>
          <?php foreach ($recentes as [$empresa, $tipo, $situacao]): ?>
          <div class="gda-proc-item<?= $recentesPreenchidos ? ' gda-proc-soft' : '' ?>">
            <div>
              <div class="gda-proc-name"><?= esc($empresa) ?></div>
              <div class="gda-proc-type"><?= $tipo ?></div>
            </div>
            <span class="gda-badge-<?= $situacao ?><?= $recentesPreenchidos ? ' filled' : '' ?>"><?= $rotulosBadge[$situacao] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

    <?php
    $termo  = $perfil === 'plataforma' ? 'Movimentação' : 'Notificação';
    $plural = $perfil === 'plataforma' ? 'Movimentações' : 'Notificações';
    $sufixo = $perfil === 'plataforma' ? '' : '?perfil=' . $perfil;
    ?>
    <div class="gda-notif-section">
      <div class="gda-notif-title"><?= $plural ?></div>

      <?php for ($i = 1; $i <= 5; $i++): ?>
      <a href="<?= base_url('movimentacoes/detalhes/' . $i . $sufixo) ?>" class="gda-notif-item">
        <div class="gda-notif-icon-wrap"><i class="fa-solid fa-bell"></i></div>
        <div>
          <div class="gda-notif-name">Nova <?= $termo ?></div>
          <div class="gda-notif-desc">Esta é uma notificação de exemplo</div>
          <div class="gda-notif-time">Agora mesmo</div>
        </div>
      </a>
      <?php endfor; ?>

      <div class="text-center">
        <a href="<?= base_url('movimentacoes' . $sufixo) ?>" class="gda-ver-todas">
          Ver todas as <?= strtolower($plural) ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

    </section>

    <?php foreach ($abas as $aba): if ($aba === 'dashboard') continue; ?>
    <section class="gda-aba-painel" data-painel="<?= $aba ?>" hidden>

      <?php if ($aba === 'empresas'): ?>
      <div class="gda-card-white">
        <div class="d-flex flex-wrap align-items-center gap-3 mb-4 pb-2">
          <h2 class="gda-panel-title mb-0 me-lg-5">Gerenciar Empresas</h2>
          <div class="flex-grow-1 mx-lg-5">
            <input type="text" class="gda-empresa-search" id="buscaEmpresa" aria-label="Buscar empresa">
          </div>
          <a href="<?= base_url('cadastrar-empresa') ?>" class="gda-btn-add">+ Adicionar Empresa</a>
        </div>

        <div class="row g-4">
          <?php foreach ($empresas as $empresa): $ativa = $empresa['ativa']; ?>
          <div class="col-lg-4 col-md-6 col-12 empresa-item" data-nome="<?= esc(strtolower($empresa['nome'])) ?>">
            <div class="gda-empresa-card<?= $ativa ? '' : ' desativado' ?>">
              <div class="d-flex justify-content-between align-items-start">
                <i class="fa-solid fa-building gda-empresa-icon"></i>
                <span class="<?= $ativa ? 'gda-badge-ativado' : 'gda-badge-desativado' ?>"><?= $ativa ? 'Ativado' : 'Desativado' ?></span>
              </div>
              <div class="gda-empresa-nome"><?= esc($empresa['nome']) ?></div>
              <div class="gda-empresa-proc"><?= $empresa['processos'] ?> Processos Ativos</div>
              <div class="d-flex gap-2">
                <a href="<?= base_url('cadastrar-empresa?editar=1') ?>" class="gda-btn-editar<?= $ativa ? '' : ' red' ?>">Editar</a>
                <a href="<?= base_url('detalhes-empresa') ?>" class="gda-btn-ver<?= $ativa ? '' : ' red' ?>">Ver mais</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <?php else: ?>
      <div class="gda-card-white">
        <h2 class="gda-panel-title"><?= $config->abas[$aba]['rotulo'] ?></h2>
        <div class="gda-vazio">
          <div class="gda-modal-icon gda-icon-lg mx-auto"><i class="<?= $config->abas[$aba]['icone'] ?>"></i></div>
          <h3>Em desenvolvimento</h3>
          <p>Esta seção ainda não foi implementada.</p>
        </div>
      </div>
      <?php endif; ?>

    </section>
    <?php endforeach; ?>

  </div>

  <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>
</html>
