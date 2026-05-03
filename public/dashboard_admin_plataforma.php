<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'includes/head.php'; ?>
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body class="gda-dash-body">

  <!-- TOPBAR -->
  <header class="gda-topbar">
    <div class="gda-topbar-brand">
      <img src="../assets/img/logo.png" alt="GDA" class="gda-topbar-logo">
      <span class="gda-topbar-title">Painel Administrativo da Plataforma</span>
    </div>
    <div class="gda-topbar-user">
      <div class="gda-topbar-user-info">
        <div class="gda-topbar-user-name">Administrador</div>
        <div class="gda-topbar-user-email">admin@gda.com.br</div>
      </div>
      <a href="index.php">
      <div class="gda-avatar">A</div>
      </a>
    </div>
  </header>

  <!-- TABS -->
  <div class="gda-tabs-bar">
    <a href="dashboard_admin_plataforma.php" class="gda-tab active">
      <i class="fa-solid fa-table-cells-large"></i> Dashboard
    </a>
    <a href="#" class="gda-tab">
      <i class="fa-regular fa-file-lines"></i> Processos
    </a>
    <a href="empresas_admin_plataforma.php" class="gda-tab">
      <i class="fa-solid fa-building"></i> Empresas
    </a>
    <a href="#" class="gda-tab">
      <i class="fa-solid fa-dollar-sign"></i> Orçamentos
    </a>
  </div>

  <!-- CONTENT -->
  <div class="gda-content">

    <!-- ROW 1: STAT CARDS -->
    <div class="row g-3 mb-3">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda-stat-card">
          <div class="gda-stat-icon"><i class="fa-solid fa-building"></i></div>
          <div>
            <div class="gda-stat-label">Empresas Ativas</div>
            <div class="gda-stat-value">241</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda-stat-card">
          <div class="gda-stat-icon"><i class="fa-solid fa-gear"></i></div>
          <div>
            <div class="gda-stat-label">Processos Ativos</div>
            <div class="gda-stat-value">132</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12">
        <div class="gda-stat-card">
          <div class="gda-stat-icon"><i class="fa-solid fa-users"></i></div>
          <div>
            <div class="gda-stat-label">Usuários Ativos</div>
            <div class="gda-stat-value">542</div>
          </div>
        </div>
      </div>
    </div>

    <!-- ROW 2: COTAÇÕES | TOP EMPRESAS | STATUS -->
    <div class="row g-3 mb-3">

      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda-panel">
          <div class="gda-panel-title">Cotações em Tempo Real</div>
          <div class="gda-cotacao-grid">
            <div class="gda-cotacao-item">
              <div class="gda-cotacao-label">Dólar - USD</div>
              <div class="gda-cotacao-valor">R$ 5,24</div>
            </div>
            <div class="gda-cotacao-item">
              <div class="gda-cotacao-label">Euro - EUR</div>
              <div class="gda-cotacao-valor">R$ 5,72</div>
            </div>
            <div class="gda-cotacao-item">
              <div class="gda-cotacao-label">Libras Esterlinas - LBS</div>
              <div class="gda-cotacao-valor">R$ 6,68</div>
            </div>
            <div class="gda-cotacao-item">
              <div class="gda-cotacao-label">Guaranies - Gs</div>
              <div class="gda-cotacao-valor">R$ 0,00077</div>
            </div>
          </div>
          <div class="gda-cotacao-dots">
            <div class="gda-cotacao-dot"></div>
            <div class="gda-cotacao-dot active"></div>
            <div class="gda-cotacao-dot"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda-panel">
          <div class="gda-panel-title">Top Empresas</div>
          <div class="gda-top-item">
            <div class="gda-top-item-left">
              <span class="gda-dot-green"></span> Gesad
            </div>
            <span class="gda-top-badge">72</span>
          </div>
          <div class="gda-top-item">
            <div class="gda-top-item-left">
              <span class="gda-dot-green"></span> ComexAgro
            </div>
            <span class="gda-top-badge">32</span>
          </div>
          <div class="gda-top-item">
            <div class="gda-top-item-left">
              <span class="gda-dot-green"></span> InfraEx
            </div>
            <span class="gda-top-badge">21</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 col-12">
        <div class="gda-panel">
          <div class="gda-panel-title">Processos por Status</div>
          <div class="gda-status-item">
            <div class="d-flex align-items-center gap-2">
              <span class="gda-dot-green"></span> Concluído
            </div>
            <span class="gda-status-count">56</span>
          </div>
          <div class="gda-status-item">
            <div class="d-flex align-items-center gap-2">
              <span class="gda-dot-yellow"></span> Em andamento
            </div>
            <span class="gda-status-count">28</span>
          </div>
          <div class="gda-status-item">
            <div class="d-flex align-items-center gap-2">
              <span class="gda-dot-red"></span> Cancelado
            </div>
            <span class="gda-status-count">2</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ROW 3: BARRAS | PROCESSOS RECENTES -->
    <div class="row g-3 mb-3">
      <div class="col-lg-5 col-12">
        <div class="gda-panel">
          <div class="gda-panel-title">Processos por dia da semana</div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Seg</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:67%">8</div></div>
          </div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Ter</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:83%">10</div></div>
          </div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Qua</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:42%">5</div></div>
          </div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Qui</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:100%">12</div></div>
          </div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Sex</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:58%">7</div></div>
          </div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Sab</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:25%">3</div></div>
          </div>
          <div class="gda-bar-row">
            <span class="gda-bar-label">Dom</span>
            <div class="gda-bar-track"><div class="gda-bar-fill" style="width:8%">1</div></div>
          </div>
        </div>
      </div>

      <div class="col-lg-7 col-12">
        <div class="gda-panel">
          <div class="gda-panel-title">Processos Recentes</div>
          <div class="gda-proc-item">
            <div>
              <div class="gda-proc-name">Syngenta</div>
              <div class="gda-proc-type">Exportação</div>
            </div>
            <span class="gda-badge-andamento">Em Andamento</span>
          </div>
          <div class="gda-proc-item">
            <div>
              <div class="gda-proc-name">AgroPay</div>
              <div class="gda-proc-type">Importação</div>
            </div>
            <span class="gda-badge-concluido">Concluído</span>
          </div>
          <div class="gda-proc-item">
            <div>
              <div class="gda-proc-name">Cargill</div>
              <div class="gda-proc-type">Exportação</div>
            </div>
            <span class="gda-badge-cancelado">Cancelado</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ROW 4: MOVIMENTAÇÕES -->
    <div class="gda-notif-section">
      <div class="gda-notif-title">Movimentações</div>

      <?php for ($i = 0; $i < 5; $i++): ?>
      <div class="gda-notif-item">
        <div class="gda-notif-icon-wrap">
          <i class="fa-solid fa-bell"></i>
        </div>
        <div>
          <div class="gda-notif-name">Nova Movimentação</div>
          <div class="gda-notif-desc">Esta é uma notificação de exemplo</div>
          <div class="gda-notif-time">Agora mesmo</div>
        </div>
      </div>
      <?php endfor; ?>

      <div class="text-center mt-2">
        <a href="#" class="gda-ver-todas">
          Ver todas as movimentações <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
