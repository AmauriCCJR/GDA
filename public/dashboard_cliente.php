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
      <span class="gda-topbar-title">Painel Administrativo</span>
    </div>
    <div class="gda-topbar-user">
      <div class="gda-topbar-user-info">
        <div class="gda-topbar-user-name">Cliente</div>
        <div class="gda-topbar-user-email">admin@gda.com.br</div>
      </div>
      <a href="index.php">
      <div class="gda-avatar">C</div>
      </a>
  </header>

  <!-- TABS -->
  <div class="gda-tabs-bar">
    <a href="dashboard_cliente.php" class="gda-tab active">
      <i class="fa-solid fa-table-cells-large"></i> Dashboard
    </a>
    <a href="#" class="gda-tab">
      <i class="fa-regular fa-file-lines"></i> Processos
    </a>
  </div>

  <!-- CONTENT -->
  <div class="gda-content">

    <!-- ROW 1: COTAÇÕES | PROCESSOS RECENTES | STATUS -->
    <div class="row g-3 mb-3">

      <!-- Cotações -->
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

      <!-- Processos Recentes -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="gda-panel">
          <div class="gda-panel-title" style="color:#1e1e1e">Processos Recentes</div>
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
            <span class="gda-badge-concluido" style="background:#14AE5C;color:#fff;border:none">Concluído</span>
          </div>
          <div class="gda-proc-item">
            <div>
              <div class="gda-proc-name">Cargill</div>
              <div class="gda-proc-type">Importação</div>
            </div>
            <span class="gda-badge-andamento" style="background:#ef4444">Cancelado</span>
          </div>
        </div>
      </div>

      <!-- Processos por Status -->
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

    <!-- ROW 2: NOTIFICAÇÕES -->
    <div class="gda-notif-section">
      <div class="gda-notif-title">Notificações</div>

      <?php for ($i = 0; $i < 5; $i++): ?>
      <div class="gda-notif-item">
        <div class="gda-notif-icon-wrap">
          <i class="fa-solid fa-bell"></i>
        </div>
        <div>
          <div class="gda-notif-name">Nova Notificação</div>
          <div class="gda-notif-desc">Esta é uma notificação de exemplo</div>
          <div class="gda-notif-time">Agora mesmo</div>
        </div>
      </div>
      <?php endfor; ?>

      <div class="text-center mt-2">
        <a href="#" class="gda-ver-todas">
          Ver todas as notificações <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
