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
  </header>

  <!-- TABS -->
  <div class="gda-tabs-bar">
    <a href="dashboard_admin_plataforma.php" class="gda-tab">
      <i class="fa-solid fa-table-cells-large"></i> Dashboard
    </a>
    <a href="#" class="gda-tab">
      <i class="fa-regular fa-file-lines"></i> Processos
    </a>
    <a href="empresas_admin_plataforma.php" class="gda-tab active">
      <i class="fa-solid fa-building"></i> Empresas
    </a>
    <a href="#" class="gda-tab">
      <i class="fa-solid fa-dollar-sign"></i> Orçamentos
    </a>
  </div>

  <!-- CONTENT -->
  <div class="gda-content">
    <div class="gda-panel" style="border-radius:14px">

      <!-- Header: título + busca + botão -->
      <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
        <h2 class="gda-panel-title mb-0" style="font-size:18px;color:#009666">Gerenciar Empresas</h2>
        <div class="flex-grow-1">
          <input type="text" class="gda-empresa-search" id="buscaEmpresa" placeholder="">
        </div>
        <button class="gda-btn-add">+ Adicionar Empresa</button>
      </div>

      <!-- GRID DE EMPRESAS -->
      <div class="row g-3" id="empresasGrid">

        <!-- AgroPay - Ativado -->
        <div class="col-lg-4 col-md-6 col-12 empresa-item" data-nome="agropay">
          <div class="gda-empresa-card">
            <div class="d-flex justify-content-between align-items-start">
              <i class="fa-solid fa-building-columns gda-empresa-icon"></i>
              <span class="gda-badge-ativado">Ativado</span>
            </div>
            <div class="gda-empresa-nome">AgroPay</div>
            <div class="gda-empresa-proc">4 Processos Ativos</div>
            <div class="d-flex gap-2">
              <button class="gda-btn-editar">Editar</button>
              <button class="gda-btn-ver">Ver mais</button>
            </div>
          </div>
        </div>

        <!-- Cargill - Ativado -->
        <div class="col-lg-4 col-md-6 col-12 empresa-item" data-nome="cargill">
          <div class="gda-empresa-card">
            <div class="d-flex justify-content-between align-items-start">
              <i class="fa-solid fa-building-columns gda-empresa-icon"></i>
              <span class="gda-badge-ativado">Ativado</span>
            </div>
            <div class="gda-empresa-nome">Cargill</div>
            <div class="gda-empresa-proc">3 Processos Ativos</div>
            <div class="d-flex gap-2">
              <button class="gda-btn-editar">Editar</button>
              <button class="gda-btn-ver">Ver mais</button>
            </div>
          </div>
        </div>

        <!-- Samsung - Desativado -->
        <div class="col-lg-4 col-md-6 col-12 empresa-item" data-nome="samsung">
          <div class="gda-empresa-card desativado">
            <div class="d-flex justify-content-between align-items-start">
              <i class="fa-solid fa-building-columns gda-empresa-icon"></i>
              <span class="gda-badge-desativado">Desativado</span>
            </div>
            <div class="gda-empresa-nome">Samsung</div>
            <div class="gda-empresa-proc">0 Processos Ativos</div>
            <div class="d-flex gap-2">
              <button class="gda-btn-editar red">Editar</button>
              <button class="gda-btn-ver red">Ver mais</button>
            </div>
          </div>
        </div>

        <!-- Fatec - Desativado -->
        <div class="col-lg-4 col-md-6 col-12 empresa-item" data-nome="fatec">
          <div class="gda-empresa-card desativado">
            <div class="d-flex justify-content-between align-items-start">
              <i class="fa-solid fa-building-columns gda-empresa-icon"></i>
              <span class="gda-badge-desativado">Desativado</span>
            </div>
            <div class="gda-empresa-nome">Fatec</div>
            <div class="gda-empresa-proc">0 Processos Ativos</div>
            <div class="d-flex gap-2">
              <button class="gda-btn-editar red">Editar</button>
              <button class="gda-btn-ver red">Ver mais</button>
            </div>
          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /gda-panel -->
  </div><!-- /gda-content -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('buscaEmpresa').addEventListener('input', function () {
      const q = this.value.toLowerCase();
      document.querySelectorAll('.empresa-item').forEach(item => {
        item.style.display = item.dataset.nome.includes(q) ? '' : 'none';
      });
    });
  </script>
</body>
</html>
