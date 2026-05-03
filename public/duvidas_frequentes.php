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
          <li class="nav-item"><a class="nav-link" href="contatos.php">Contatos</a></li>
          <li class="nav-item"><a class="nav-link gda_nav_active" href="duvidas_frequentes.php">Dúvidas Frequentes</a></li>
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
          <li class="breadcrumb-item active">Dúvidas Frequentes</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h1 class="gda_title_home">Como podemos ajudar?</h1>
        <p class="text-muted">Encontre respostas rápidas para as dúvidas mais comuns</p>
        <div class="gda_faq_search mx-auto">
          <input type="text" class="form-control gda_search_input" id="faqSearch" placeholder="">
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-12 d-flex flex-wrap justify-content-center gap-2">
        <button class="btn gda_filter_btn gda_filter_active" data-filter="all">
          <i class="fa-solid fa-table-list me-1"></i> Todas
        </button>
        <button class="btn gda_filter_btn" data-filter="plataforma">
          <i class="fa-solid fa-shield-halved me-1"></i> Plataforma
        </button>
        <button class="btn gda_filter_btn" data-filter="processos">
          <i class="fa-regular fa-file-lines me-1"></i> Processos
        </button>
        <button class="btn gda_filter_btn" data-filter="usuarios">
          <i class="fa-regular fa-user me-1"></i> Usuários
        </button>
        <button class="btn gda_filter_btn" data-filter="pagamentos">
          <i class="fa-solid fa-dollar-sign me-1"></i> Pagamentos
        </button>
        <button class="btn gda_filter_btn" data-filter="empresas">
          <i class="fa-regular fa-building me-1"></i> Empresas
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-12 mx-auto" id="faqList">

        <div class="gda_faq_item" data-category="plataforma">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq1">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>O que é a Plataforma GDA?</span>
                <div><span class="gda_faq_tag">Plataforma</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq1">
            <div class="gda_faq_answer">O GDA é uma plataforma especializada em Gestão de Despachos Aduaneiros, que centraliza e digitaliza todos os processos de importação e exportação, facilitando o controle documental e o acompanhamento em tempo real.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="plataforma">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq2">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como faço para acessar a Plataforma?</span>
                <div><span class="gda_faq_tag">Plataforma</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq2">
            <div class="gda_faq_answer">Acesse pelo botão "Entrar" no menu superior. Utilize seu e-mail e senha cadastrados. Caso ainda não possua acesso, clique em "Solicitar Demonstração".</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="usuarios">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq3">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Quais são os tipos de usuários?</span>
                <div><span class="gda_faq_tag">Usuários</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq3">
            <div class="gda_faq_answer">A plataforma possui diferentes perfis: Administrador (acesso total), Operador (gerenciamento de processos) e Visualizador (somente leitura).</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="usuarios">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq4">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como faço para cadastrar novos usuários à minha empresa?</span>
                <div><span class="gda_faq_tag">Usuários</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq4">
            <div class="gda_faq_answer">No painel administrativo, acesse "Configurações > Usuários > Adicionar Usuário". O novo usuário receberá um e-mail com instruções de acesso.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="usuarios">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq5">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Posso alterar as permissões de um funcionário?</span>
                <div><span class="gda_faq_tag">Usuários</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq5">
            <div class="gda_faq_answer">Sim. Administradores podem alterar permissões a qualquer momento em "Configurações > Usuários".</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="usuarios">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq6">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como recuperar minha senha?</span>
                <div><span class="gda_faq_tag">Usuários</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq6">
            <div class="gda_faq_answer">Na tela de login, clique em "Esqueci minha senha". O link de redefinição expira em 24 horas.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="processos">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq7">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como acompanhar o histórico de um processo?</span>
                <div><span class="gda_faq_tag">Processos</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq7">
            <div class="gda_faq_answer">Acesse o processo desejado e clique na aba "Histórico". Todas as atualizações ficam registradas com data, hora e responsável.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="processos">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq8">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como criar um processo?</span>
                <div><span class="gda_faq_tag">Processos</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq8">
            <div class="gda_faq_answer">No menu principal, clique em "Processos > Novo Processo". Preencha tipo, empresa, referência e documentos relacionados.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="processos">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq8b">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como acompanhar o histórico de um processo?</span>
                <div><span class="gda_faq_tag">Processos</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq8b">
            <div class="gda_faq_answer">Acesse o processo e clique na aba "Histórico". Cada etapa registra automaticamente data, hora, usuário e descrição da alteração.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="empresas">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq9">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Posso editar dados da minha empresa?</span>
                <div><span class="gda_faq_tag">Empresas</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq9">
            <div class="gda_faq_answer">Sim. Em "Configurações > Empresa" é possível atualizar razão social, CNPJ, endereço, contatos e logotipo.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="empresas">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq10">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Quantos processos posso ter ativos simultaneamente?</span>
                <div><span class="gda_faq_tag">Empresas</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq10">
            <div class="gda_faq_answer">Depende do plano: Starter até 50/mês, Professional até 200/mês e Enterprise é ilimitado.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="processos">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq11">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Posso excluir um processo?</span>
                <div><span class="gda_faq_tag">Processos</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq11">
            <div class="gda_faq_answer">Processos não são excluídos permanentemente por fins de auditoria. É possível arquivá-los ou cancelá-los (apenas administradores).</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="pagamentos">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq12">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como funcionam os documentos de pagamento?</span>
                <div><span class="gda_faq_tag">Pagamentos</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq12">
            <div class="gda_faq_answer">Os documentos são anexados diretamente ao processo. O sistema valida automaticamente formatos e campos obrigatórios, alertando sobre inconsistências.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="processos">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq12b">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como funcionam os documentos e suas validações?</span>
                <div><span class="gda_faq_tag">Documentos</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq12b">
            <div class="gda_faq_answer">Cada documento passa por validação automática ao ser enviado. O sistema verifica formato, tamanho e campos obrigatórios, notificando o usuário sobre qualquer pendência.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="plataforma">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq13">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Posso imprimir relatórios?</span>
                <div><span class="gda_faq_tag">Plataforma</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq13">
            <div class="gda_faq_answer">Sim. Exporte relatórios em PDF e Excel. Acesse "Relatórios", configure os filtros e clique em "Exportar".</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="plataforma">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq14">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Como consultar as cotações de moedas?</span>
                <div><span class="gda_faq_tag">Plataforma</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq14">
            <div class="gda_faq_answer">As cotações em tempo real estão na página inicial e dentro da plataforma em "Cotações", atualizadas automaticamente pelo Banco Central.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="plataforma">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq15">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>O que fazer se encontrar alguma inconsistência na plataforma?</span>
                <div><span class="gda_faq_tag">Plataforma</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq15">
            <div class="gda_faq_answer">Entre em contato com o suporte via WhatsApp ou e-mail, descrevendo o problema com capturas de tela. Respondemos em até 4 horas úteis.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="plataforma">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq16">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Os dados estarão seguros?</span>
                <div><span class="gda_faq_tag">Plataforma</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq16">
            <div class="gda_faq_answer">Sim. Utilizamos criptografia SSL/TLS, servidores nacionais, backups diários e controles rigorosos, em conformidade com a LGPD.</div>
          </div>
        </div>

        <div class="gda_faq_item" data-category="usuarios">
          <button class="gda_faq_btn" data-bs-toggle="collapse" data-bs-target="#faq17">
            <div class="d-flex align-items-start gap-3">
              <i class="fa-regular fa-circle-question gda_faq_icon mt-1"></i>
              <div class="text-start">
                <span>Posso desativar um usuário sem excluí-lo?</span>
                <div><span class="gda_faq_tag">Usuários</span></div>
              </div>
            </div>
            <i class="fa-solid fa-chevron-down gda_faq_chevron"></i>
          </button>
          <div class="collapse" id="faq17">
            <div class="gda_faq_answer">Sim. Em "Configurações > Usuários", selecione e clique em "Desativar". O histórico é preservado.</div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <?php include 'includes/footer.php'; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('.gda_filter_btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.gda_filter_btn').forEach(b => b.classList.remove('gda_filter_active'));
        this.classList.add('gda_filter_active');
        const filter = this.dataset.filter;
        document.querySelectorAll('.gda_faq_item').forEach(item => {
          item.style.display = (filter === 'all' || item.dataset.category === filter) ? '' : 'none';
        });
      });
    });
    document.getElementById('faqSearch').addEventListener('input', function() {
      const q = this.value.toLowerCase();
      document.querySelectorAll('.gda_faq_item').forEach(item => {
        item.style.display = item.innerText.toLowerCase().includes(q) ? '' : 'none';
      });
    });
    document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(btn => {
      const targetId = btn.getAttribute('data-bs-target');
      const collapseEl = document.querySelector(targetId);
      const chevron = btn.querySelector('.gda_faq_chevron');
      if (collapseEl && chevron) {
        collapseEl.addEventListener('show.bs.collapse', () => chevron.classList.add('gda_chevron_open'));
        collapseEl.addEventListener('hide.bs.collapse', () => chevron.classList.remove('gda_chevron_open'));
      }
    });
  </script>
</body>
</html>
