<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?= view('includes/head') ?>
</head>
<body class="gda-dash-body">

  <div class="gda-blur-alvo">
  <?= view('includes/dash_topbar', ['perfil' => 'plataforma', 'semAbas' => true]) ?>

  <nav class="gda-crumb-bar gda-crumb-full gda-no-print">
    <div class="gda-wrap d-flex gap-3 w-100">
      <a href="<?= base_url('dashboard') ?>">Dashboard</a>
      <span class="gda-crumb-sep">/</span>
      <a href="<?= base_url('dashboard') . '#empresas' ?>">Empresas</a>
      <span class="gda-crumb-sep">/</span>
      <span class="gda-crumb-atual">Gesad Ltda.</span>
    </div>
  </nav>

  <div class="gda-wrap gda-content">
    <div class="gda-det-card">

      <div class="gda-det-header">
        <div>
          <div class="gda-det-nome">Gesad Ltda. <span>#05</span></div>
          <div class="gda-det-cnpj">CNPJ: 12.345.678/0001-99</div>
        </div>
        <div class="gda-print-meta">Gerado em <span class="js-data-hoje"></span></div>
        <button type="button" class="gda-btn-print gda-no-print" data-bs-toggle="modal" data-bs-target="#modalImprimir" title="Imprimir relatório">
          <i class="fa-solid fa-print"></i>
        </button>
      </div>

      <section class="gda-det-section">
        <h2 class="gda-det-title">Dados da Empresa</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="gda-field-label">Razão Social</div>
            <div class="gda-field-value">Gesad Ltda</div>
            <div class="gda-field-label">CNPJ</div>
            <div class="gda-field-value">12.345.678/0001-99</div>
            <div class="gda-field-label">E-mail do Responsável</div>
            <div class="gda-field-value">responsavel@gesad.com.br</div>
            <div class="gda-field-label">Ramo de Atuação</div>
            <div class="gda-field-value">Importação e exportação</div>
          </div>
          <div class="col-md-6">
            <div class="gda-field-label">Nome Fantasia</div>
            <div class="gda-field-value">Gesad</div>
            <div class="gda-field-label">Inscrição Estadual</div>
            <div class="gda-field-value">123.456.789.000</div>
            <div class="gda-field-label">Telefone</div>
            <div class="gda-field-value">(11) 3456-7890</div>
            <div class="gda-field-label">Status</div>
            <div class="gda-field-value gda-texto-verde">Ativado</div>
          </div>
        </div>
        <div class="row g-4 mt-2">
          <div class="col-md-4"><div class="gda-det-stat"><strong>3</strong>Processos Ativos</div></div>
          <div class="col-md-4"><div class="gda-det-stat"><strong>7</strong>Funcionários Ativos</div></div>
          <div class="col-md-4"><div class="gda-det-stat"><strong>21</strong>Clientes Ativos</div></div>
        </div>
      </section>

      <section class="gda-det-section">
        <h2 class="gda-det-title">Endereço</h2>
        <div class="gda-field-label">CEP</div>
        <div class="gda-field-value">01310-100</div>
        <div class="row">
          <div class="col-md-4 col-6"><div class="gda-field-label">Rua / Av.</div><div class="gda-field-value">Av. Paulista</div></div>
          <div class="col-md-3 col-6"><div class="gda-field-label">Número</div><div class="gda-field-value">1220</div></div>
          <div class="col-md-5 col-12"><div class="gda-field-label">Complemento</div><div class="gda-field-value">Sala 501, 5º andar</div></div>
          <div class="col-md-4 col-6"><div class="gda-field-label">Bairro</div><div class="gda-field-value">Bela Vista</div></div>
          <div class="col-md-3 col-6"><div class="gda-field-label">Cidade</div><div class="gda-field-value">São Paulo</div></div>
          <div class="col-md-2 col-6"><div class="gda-field-label">Estado</div><div class="gda-field-value">SP</div></div>
          <div class="col-md-3 col-6"><div class="gda-field-label">País</div><div class="gda-field-value">Brasil</div></div>
        </div>
      </section>

      <section class="gda-det-section">
        <h2 class="gda-det-title">Contatos</h2>
        <div class="row g-4">
          <?php foreach ([
              ['SC', 'Sanny Cantero', 'sannycantero@gesad.com.br', '(11) 98765-4321'],
              ['MB', 'Mariela Britez', 'marielabritez@gesad.com.br', '(11) 98765-1234'],
          ] as [$iniciais, $nome, $email, $tel]): ?>
          <div class="col-md-6">
            <div class="gda-contato-card">
              <div class="d-flex align-items-center gap-3 mb-4">
                <div class="gda-contato-avatar"><?= $iniciais ?></div>
                <div>
                  <div class="gda-contato-nome"><?= $nome ?></div>
                  <div class="gda-contato-cargo">Gerente Geral</div>
                </div>
              </div>
              <div><?= $email ?></div>
              <div><?= $tel ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="gda-det-section">
        <h2 class="gda-det-title">Documentos</h2>
        <?php foreach ([
            ['PDF', 'Comprovante_cnpj.pdf', '2.3 MB'],
            ['JPG', 'Contrato_social.jpg', '1.1 MB'],
            ['PNG', 'Alvara_funcionamento.png', '8.9 KB'],
        ] as [$ext, $arquivo, $tamanho]): ?>
        <div class="gda-doc-row">
          <span class="gda-doc-ext"><?= $ext ?></span>
          <span><?= $arquivo ?></span>
          <span class="gda-doc-meta"><?= $tamanho ?> · 10/04/2026</span>
        </div>
        <?php endforeach; ?>
      </section>

      <section class="gda-det-section">
        <h2 class="gda-det-title">Acesso do Administrador</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="gda-field-label">Nome Completo</div>
            <div class="gda-field-value">Sanny Cristina Cantero dos Santos</div>
            <div class="gda-field-label">Telefone</div>
            <div class="gda-field-value">(11) 97654-3210</div>
          </div>
          <div class="col-md-6">
            <div class="gda-field-label">E-mail de Acesso</div>
            <div class="gda-field-value">sanny@gesad.com.br</div>
            <div class="gda-field-label">CPF</div>
            <div class="gda-field-value">123.456.789-00</div>
          </div>
        </div>
        <div class="row g-3 mt-1">
          <?php foreach (['Visualizar Processos', 'Criar Orçamentos', 'Cadastrar Usuários', 'Excluir Documentos', 'Editar Processos', 'Visualizar Relatórios'] as $perm): ?>
          <div class="col-md-4">
            <div class="gda-perm ativo estatico"><i class="fa-regular fa-circle-check"></i> <?= $perm ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <div class="gda-print-footer">
        <span>Painel Administrativo da Plataforma · GDA</span>
        <span>Documento gerado em <span class="js-data-hoje"></span> às <span class="js-hora-agora"></span></span>
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade gda-modal" id="modalImprimir" tabindex="-1" aria-labelledby="tituloImprimir" aria-hidden="true">
    <div class="modal-dialog gda-dialog-imprimir">
      <div class="modal-content p-3">
        <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom">
          <h5 class="gda-modal-title mb-0" id="tituloImprimir">Imprimir relatório da empresa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="gda-print-box">
          <div class="gda-print-row"><span>Documento</span><span class="gda-texto-verde">Gesad Ltda. #05</span></div>
          <div class="gda-print-row">
            <label for="selImpressora">Impressora</label>
            <select id="selImpressora">
              <option value="">Selecione ...</option>
              <option>Salvar como PDF</option>
              <option>Impressora padrão do sistema</option>
            </select>
          </div>
          <div class="gda-print-row"><span>Páginas</span><span class="gda-texto-verde">2</span></div>
          <div class="gda-print-row">
            <label for="selOrientacao">Orientação</label>
            <select id="selOrientacao">
              <option value="">Selecione ...</option>
              <option value="portrait">Retrato</option>
              <option value="landscape">Paisagem</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-end gap-2 mt-3">
          <button type="button" class="gda-btn gda-btn-gray gda-btn-sm" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="gda-btn gda-btn-outline gda-btn-sm px-5" id="btnImprimir">Imprimir</button>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/js/detalhes_empresa.js') ?>"></script>
</body>
</html>
