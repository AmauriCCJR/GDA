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
          <li class="nav-item"><a class="nav-link" href="duvidas_frequentes.php">Dúvidas Frequentes</a></li>
          <li class="nav-item"><a class="nav-link gda_nav_active" href="termos_de_uso.php">Termos de Uso</a></li>
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
          <li class="breadcrumb-item active">Termos de Uso</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8 col-12 mx-auto">
        <h1 class="gda_title_home text-center">Termos de Uso</h1>
        <p class="text-center text-muted mb-5">Última atualização: 23 de março de 2026</p>

        <div class="gda_legal_box">
          <p>Bem-vindo ao Sistema de Gestão de Despachos Aduaneiros (GDA). Ao acessar e utilizar este sistema, você concorda com os seguintes termos e condições de uso.</p>

          <h2 class="gda_legal_heading">1. Aceitação dos Termos</h2>
          <p>Ao criar uma conta e utilizar o GDA, você declara que leu, compreendeu e concorda em cumprir estes Termos de Uso, bem como todas as leis e regulamentos aplicáveis. Se você não concordar com qualquer parte destes termos, não deverá utilizar o sistema.</p>

          <h2 class="gda_legal_heading">2. Descrição do Serviço</h2>
          <p>O GDA é uma plataforma governamental destinada à gestão de processos aduaneiros, oferecendo aos usuários autorizados ferramentas para:</p>
          <ul>
            <li>Submeter e acompanhar declarações de importação e exportação</li>
            <li>Consultar status de processos aduaneiros</li>
            <li>Gerenciar documentação relacionada a operações de comércio exterior</li>
            <li>Comunicar-se com autoridades aduaneiras</li>
            <li>Acessar informações sobre regulamentações e procedimentos</li>
          </ul>

          <h2 class="gda_legal_heading">3. Cadastro e Conta de Usuário</h2>
          <p>Para utilizar o GDA, você deve:</p>
          <ul>
            <li>Fornecer informações precisas, completas e atualizadas durante o processo de cadastro</li>
            <li>Manter a segurança e confidencialidade de suas credenciais de acesso</li>
            <li>Notificar imediatamente qualquer uso não autorizado de sua conta</li>
            <li>Ser responsável por todas as atividades realizadas através de sua conta</li>
          </ul>

          <div class="gda_legal_alert">
            <strong>Importante:</strong> O compartilhamento de credenciais é estritamente proibido e pode resultar no bloqueio permanente da conta.
          </div>

          <h2 class="gda_legal_heading">4. Uso Adequado do Sistema</h2>
          <p>Ao utilizar o GDA, você concorda em:</p>
          <ul>
            <li>Utilizar o sistema apenas para fins legítimos relacionados a operações aduaneiras</li>
            <li>Não tentar acessar áreas restritas ou dados de terceiros sem autorização</li>
            <li>Não transmitir vírus, malware ou qualquer código malicioso</li>
            <li>Não realizar ataques de negação de serviço ou sobrecarregar o sistema</li>
            <li>Não extrair dados do sistema através de métodos automatizados não autorizados</li>
            <li>Respeitar os direitos de propriedade intelectual do sistema</li>
          </ul>

          <h2 class="gda_legal_heading">5. Responsabilidades do Usuário</h2>
          <p>Você é inteiramente responsável por:</p>
          <ul>
            <li>A veracidade e exatidão das informações fornecidas ao sistema</li>
            <li>O cumprimento de todas as leis e regulamentos aduaneiros aplicáveis</li>
            <li>A manutenção de backups de seus próprios dados</li>
            <li>Os resultados de suas operações no sistema</li>
          </ul>

          <h2 class="gda_legal_heading">6. Propriedade Intelectual</h2>
          <p>Todo o conteúdo do GDA, incluindo textos, gráficos, logos, ícones, imagens, clipes de áudio, downloads digitais e compilações de dados, é propriedade do Governo Federal e está protegido pelas leis de direitos autorais brasileiras e internacionais.</p>

          <h2 class="gda_legal_heading">7. Limitação de Responsabilidade</h2>
          <p>O GDA é fornecido "como está". Não garantimos que o serviço será ininterrupto, seguro ou livre de erros. Não nos responsabilizamos por:</p>
          <ul>
            <li>Perda de dados ou lucros resultantes do uso ou incapacidade de usar o sistema</li>
            <li>Interrupções temporárias para manutenção ou atualizações</li>
            <li>Decisões tomadas com base nas informações fornecidas pelo sistema</li>
            <li>Ações ou omissões de terceiros</li>
          </ul>

          <h2 class="gda_legal_heading">8. Modificações do Serviço</h2>
          <p>Reservamo-nos o direito de modificar, suspender ou descontinuar qualquer aspecto do GDA a qualquer momento, com ou sem aviso prévio. Não seremos responsáveis perante você ou terceiros por qualquer modificação, suspensão ou descontinuação do serviço.</p>

          <h2 class="gda_legal_heading">9. Término de Acesso</h2>
          <p>Podemos suspender ou encerrar seu acesso ao GDA imediatamente, sem aviso prévio, se:</p>
          <ul>
            <li>Você violar qualquer disposição destes Termos de Uso</li>
            <li>Houver suspeita de atividade fraudulenta ou ilegal</li>
            <li>For solicitado por autoridades competentes</li>
            <li>O acesso representar risco à segurança do sistema</li>
          </ul>

          <h2 class="gda_legal_heading">10. Lei Aplicável</h2>
          <p>Estes Termos de Uso são regidos pelas leis da República Federativa do Brasil. Qualquer disputa relacionada a estes termos será submetida à jurisdição exclusiva dos tribunais de Brasília, DF.</p>

          <h2 class="gda_legal_heading">11. Alterações nos Termos</h2>
          <p>Podemos atualizar estes Termos de Uso periodicamente. A versão mais recente estará sempre disponível nesta página. O uso continuado do sistema após as alterações constitui aceitação dos novos termos.</p>

          <h2 class="gda_legal_heading">12. Contato</h2>
          <p>Para questões sobre estes Termos de Uso, entre em contato conosco através do e-mail <a href="mailto:juridico@gda.gov.br" class="gda_legal_link">juridico@gda.gov.br</a> ou pelo telefone <a href="tel:08001231234" class="gda_legal_link">0800 123 1234</a>.</p>

          <div class="gda_legal_alert">
            Ao realizar cadastro no GDA, você confirma que leu e concordou com estes Termos de Uso.
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <?php include 'includes/footer.php'; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
