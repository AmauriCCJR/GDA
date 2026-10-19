<?php $editar = $editar ?? false; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?= view('includes/head') ?>
</head>
<body class="gda-dash-body">

  <div class="gda-blur-alvo">
  <?= view('includes/dash_topbar', ['perfil' => 'plataforma', 'semAbas' => true]) ?>

  <nav class="gda-crumb-bar gda-crumb-full">
    <div class="gda-wrap d-flex gap-3 w-100">
      <a href="<?= base_url('dashboard') ?>" data-sair="dashboard">Dashboard</a>
      <span class="gda-crumb-sep">/</span>
      <a href="<?= base_url('dashboard') . '#empresas' ?>" data-sair="empresas">Empresas</a>
      <span class="gda-crumb-sep">/</span>
      <span class="gda-crumb-atual"><?= $editar ? 'Editar Empresa' : 'Cadastrar Empresa' ?></span>
    </div>
  </nav>

  <div class="gda-wrap">

    <nav class="gda-tabs-bar mt-0 mb-3" id="abasCadastro">
      <button type="button" class="gda-tab" data-ir="0">Dados da Empresa</button>
      <button type="button" class="gda-tab" data-ir="1">Endereço</button>
      <button type="button" class="gda-tab" data-ir="2">Contatos</button>
      <button type="button" class="gda-tab" data-ir="3">Documentos</button>
      <button type="button" class="gda-tab" data-ir="4"><i class="fa-solid fa-shield-halved"></i> Acesso do Admin</button>
    </nav>

    <form id="formEmpresa" novalidate autocomplete="off"
      data-editar="<?= $editar ? '1' : '0' ?>"
      data-url-dashboard="<?= base_url('dashboard') ?>"
      data-url-empresas="<?= base_url('dashboard') . '#empresas' ?>">

      <section class="gda-step" data-passo="0">
        <div class="gda-form-card">
          <h2 class="gda-form-title">Dados Cadastrais da Empresa</h2>
          <div class="row gx-5">
            <div class="col-md-6">
              <label class="gda-label" for="razaoSocial">Razão Social <span class="req">*</span></label>
              <input class="gda-input" id="razaoSocial" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="nomeFantasia">Nome Fantasia <span class="req">*</span></label>
              <input class="gda-input" id="nomeFantasia" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="cnpj">CNPJ <span class="req">*</span></label>
              <input class="gda-input" id="cnpj" data-mascara="cnpj" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="inscricaoEstadual">Inscrição Estadual</label>
              <input class="gda-input" id="inscricaoEstadual">
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="emailResponsavel">E-mail do responsável da empresa<span class="req">*</span></label>
              <input class="gda-input" id="emailResponsavel" type="email" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="telefoneEmpresa">Telefone <span class="req">*</span></label>
              <input class="gda-input" id="telefoneEmpresa" data-mascara="tel" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="ramo">Ramo de atuação da empresa</label>
              <select class="gda-input" id="ramo">
                <option value="">Selecione uma opção ...</option>
                <option>Importação</option>
                <option>Exportação</option>
                <option>Importação e exportação</option>
                <option>Armazenagem</option>
                <option>Consultoria aduaneira</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="statusEmpresa">Status da empresa <span class="req">*</span></label>
              <select class="gda-input" id="statusEmpresa" required>
                <option value="">Selecione uma opção ...</option>
                <option>Ativado</option>
                <option>Desativado</option>
              </select>
            </div>
          </div>
        </div>
      </section>

      <section class="gda-step d-none" data-passo="1">
        <div class="gda-form-card">
          <h2 class="gda-form-title">Endereço</h2>
          <div class="row gx-3">
            <div class="col-md-4">
              <label class="gda-label" for="cep">CEP <span class="req">*</span></label>
              <input class="gda-input" id="cep" data-mascara="cep" required>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
              <label class="gda-label" for="rua">Rua/Av. <span class="req">*</span></label>
              <input class="gda-input" id="rua" required>
            </div>
            <div class="col-md-2 col-4">
              <label class="gda-label" for="numero">Número <span class="req">*</span></label>
              <input class="gda-input" id="numero" required>
            </div>
            <div class="col-md-4 col-8">
              <label class="gda-label" for="complemento">Complemento <span class="req">*</span></label>
              <input class="gda-input" id="complemento" required>
            </div>
            <div class="col-md-3">
              <label class="gda-label" for="bairro">Bairro <span class="req">*</span></label>
              <input class="gda-input" id="bairro" required>
            </div>
            <div class="col-md-3">
              <label class="gda-label" for="cidade">Cidade <span class="req">*</span></label>
              <input class="gda-input" id="cidade" required>
            </div>
            <div class="col-md-2 col-4">
              <label class="gda-label" for="estado">Estado <span class="req">*</span></label>
              <input class="gda-input" id="estado" maxlength="2" required>
            </div>
            <div class="col-md-4 col-8">
              <label class="gda-label" for="pais">País <span class="req">*</span></label>
              <input class="gda-input" id="pais" required>
            </div>
          </div>
        </div>
      </section>

      <section class="gda-step d-none" data-passo="2">
        <div class="gda-form-card">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="gda-form-title mb-0">Contatos</h2>
            <button type="button" class="gda-btn gda-btn-primary" id="btnAddContato">+ Adicionar</button>
          </div>
          <div id="listaContatos"></div>
        </div>
      </section>

      <section class="gda-step d-none" data-passo="3">
        <div class="gda-form-card gda-docs-card">
          <h2 class="gda-form-title">Documentos</h2>
          <input type="file" id="inputArquivo" accept=".jpg,.jpeg,.png,.pdf" hidden>

          <div class="gda-drop js-drop" id="docVazio">
            <i class="fa-solid fa-cloud-arrow-up gda-drop-icon"></i>
            <div class="gda-drop-title">Selecione um arquivo ou arraste e solte aqui</div>
            <div class="gda-drop-sub">JPG, PNG ou PDF, tamanho de arquivo não superior a 10MB</div>
            <button type="button" class="gda-btn gda-btn-primary js-escolher">Upload arquivo</button>
          </div>

          <div id="docProgresso" class="d-none">
            <div class="gda-drop-compact js-drop">
              <i class="fa-solid fa-cloud-arrow-up gda-drop-icon"></i>
              <div class="flex-grow-1">
                <div>Selecione um arquivo ou arraste e solte aqui</div>
                <div>JPG, PNG ou PDF, tamanho de arquivo não superior a 10MB</div>
              </div>
              <button type="button" class="gda-btn gda-btn-primary js-escolher">Upload arquivo</button>
            </div>
            <div class="gda-upload-area">
              <div class="gda-upload-sub">Adicionando arquivo</div>
              <div class="d-flex align-items-center gap-3">
                <div class="gda-clip"><i class="fa-solid fa-paperclip"></i></div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between gda-upload-info">
                    <span class="js-pend-nome"></span><span class="js-pend-tam"></span>
                  </div>
                  <div class="gda-progress"><div class="gda-progress-fill" id="barraProgresso"></div></div>
                </div>
              </div>
            </div>
          </div>

          <div id="docPrevia" class="d-none">
            <div class="gda-upload-area pt-4">
              <div class="gda-upload-sub">Adicionando arquivo</div>
              <div class="d-flex align-items-center gap-3">
                <div class="gda-clip"><i class="fa-solid fa-paperclip"></i></div>
                <div class="flex-grow-1 gda-upload-info">
                  <a href="#" id="linkPrevia" class="d-block fw-semibold gda-texto-verde">Prévia</a>
                  <div class="d-flex justify-content-between"><span class="js-pend-nome"></span><span class="js-pend-tam"></span></div>
                </div>
              </div>
              <div class="d-flex justify-content-end gap-2 mt-4">
                <button type="button" class="gda-btn gda-btn-gray gda-btn-sm" id="btnCancelarArquivo">Cancelar</button>
                <button type="button" class="gda-btn gda-btn-primary gda-btn-sm px-4" id="btnConfirmarArquivo">Upload arquivo</button>
              </div>
            </div>
          </div>

          <div id="docCarregando" class="d-none"><div class="gda-loading-dot"></div></div>

          <div id="docLista" class="d-none">
            <div id="itensDocs"></div>
            <div class="text-end mt-3">
              <button type="button" class="gda-btn gda-btn-primary js-escolher">Upload arquivo</button>
            </div>
          </div>

          <p class="text-danger small text-center mt-2 d-none" id="erroArquivo"></p>
        </div>
      </section>

      <section class="gda-step d-none" data-passo="4">
        <div class="gda-info-box">
          <i class="fa-solid fa-shield-halved"></i>
          <div>
            Credenciais do Administrador da Empresa<br>
            <strong>Defina aqui o login e a senha do <span class="gda-destaque">Administrador Sênior</span> desta empresa. Ele poderá acessar a plataforma e cadastrar seus próprios funcionários e clientes</strong>
          </div>
        </div>

        <div class="gda-form-card px-md-5">
          <h2 class="gda-form-title mb-4"><i class="fa-regular fa-user"></i> Dados do Administrador</h2>
          <div class="row gx-5">
            <div class="col-md-6">
              <label class="gda-label" for="adminNome">Nome Completo <span class="req">*</span></label>
              <input class="gda-input" id="adminNome" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="adminEmail">E-mail de acesso <span class="req">*</span></label>
              <input class="gda-input" id="adminEmail" type="email" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="adminTelefone">Telefone <span class="req">*</span></label>
              <input class="gda-input" id="adminTelefone" data-mascara="tel" required>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="adminCpf">CPF <span class="req">*</span></label>
              <input class="gda-input" id="adminCpf" data-mascara="cpf" required>
            </div>
          </div>
        </div>

        <div class="gda-form-card px-md-5">
          <h2 class="gda-form-title mb-4"><i class="fa-solid fa-lock"></i> Senha de Acesso</h2>
          <div class="row gx-5">
            <div class="col-md-6">
              <label class="gda-label" for="adminSenha">Senha <?= $editar ? '' : '<span class="req">*</span>' ?></label>
              <div class="gda-input-wrap">
                <input class="gda-input mb-1" id="adminSenha" type="password" <?= $editar ? '' : 'required' ?>>
                <button type="button" class="gda-olho" data-olho="adminSenha" aria-label="Mostrar senha"><i class="fa-regular fa-eye"></i></button>
              </div>
              <div class="gda-label gda-forca-label">Força da senha</div>
              <div class="gda-forca-track"><div class="gda-forca-fill" id="forcaSenha"></div></div>
            </div>
            <div class="col-md-6">
              <label class="gda-label" for="adminSenha2">Confirmar senha <?= $editar ? '' : '<span class="req">*</span>' ?></label>
              <div class="gda-input-wrap">
                <input class="gda-input" id="adminSenha2" type="password" <?= $editar ? '' : 'required' ?>>
                <button type="button" class="gda-olho" data-olho="adminSenha2" aria-label="Mostrar senha"><i class="fa-regular fa-eye"></i></button>
              </div>
              <div class="text-danger small d-none" id="erroSenha2">As senhas não conferem.</div>
            </div>
          </div>
          <div class="gda-req-box">
            Sua senha precisa ter:
            <div class="row">
              <div class="col-md-6">
                <div class="gda-req-item" data-regra="tamanho"><i class="fa-regular fa-circle-check"></i> Mínimo de 8 Caracteres</div>
                <div class="gda-req-item" data-regra="numero"><i class="fa-regular fa-circle-check"></i> Deve conter números</div>
              </div>
              <div class="col-md-6">
                <div class="gda-req-item" data-regra="maiuscula"><i class="fa-regular fa-circle-check"></i> Letra maiúscula</div>
                <div class="gda-req-item" data-regra="especial"><i class="fa-regular fa-circle-check"></i> Caractere especial</div>
              </div>
            </div>
          </div>
        </div>

        <div class="gda-form-card px-md-5">
          <h2 class="gda-form-title mb-4"><i class="fa-solid fa-shield-halved"></i> Permissões do Administrador</h2>
          <div class="row gx-5 gy-3" id="permissoes">
            <?php foreach (['Visualizar Processos', 'Editar Processos', 'Excluir Documentos', 'Cadastrar Usuários', 'Criar Orçamentos', 'Visualizar Relatórios'] as $perm): ?>
            <div class="col-md-6">
              <button type="button" class="gda-perm" aria-pressed="false"><i class="fa-regular fa-circle-check"></i> <?= $perm ?></button>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

    </form>

    <div class="gda-step-nav">
      <button type="button" class="gda-btn gda-btn-step" id="btnVoltar"></button>
      <div class="gda-step-dots" id="dotsPassos">
        <span class="gda-step-dot"></span><span class="gda-step-dot"></span><span class="gda-step-dot"></span><span class="gda-step-dot"></span><span class="gda-step-dot"></span>
      </div>
      <button type="button" class="gda-btn gda-btn-primary gda-btn-step" id="btnAvancar"></button>
    </div>

  </div>
  </div>

  <div class="modal fade gda-modal gda-modal-alerta" id="modalSair" tabindex="-1" aria-labelledby="tituloSair" aria-hidden="true">
    <div class="modal-dialog gda-dialog-sair">
      <div class="modal-content p-4">
        <div class="d-flex gap-3">
          <div class="gda-modal-icon alerta"><i class="fa-solid fa-circle-exclamation"></i></div>
          <div>
            <div class="gda-modal-title" id="tituloSair">Deseja sair do cadastro?</div>
            <div class="gda-modal-text">Você tem alterações não salvas. Se sair agora, todas as informações preenchidas serão perdidas.</div>
          </div>
        </div>
        <div class="d-flex justify-content-end gap-2 mt-4">
          <button type="button" class="gda-btn gda-btn-gray gda-btn-sm" data-bs-dismiss="modal">Cancelar</button>
          <a href="#" class="gda-btn gda-btn-outline gda-btn-sm" id="btnConfirmarSaida">Voltar para Empresas</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade gda-modal" id="modalConfirmar" tabindex="-1" aria-labelledby="tituloConfirmar" aria-hidden="true">
    <div class="modal-dialog gda-dialog-confirmar">
      <div class="modal-content p-4">
        <div class="d-flex gap-3 align-items-center mb-3">
          <div class="gda-modal-icon"><i class="fa-solid fa-circle-info"></i></div>
          <div>
            <div class="gda-modal-title" id="tituloConfirmar"><?= $editar ? 'Confirmar alterações da empresa' : 'Confirmar cadastro da empresa' ?></div>
            <div class="gda-modal-text">Revise os dados abaixo antes de finalizar. Esta ação <?= $editar ? 'atualizará o cadastro' : 'criará o acesso do administrador' ?> imediatamente.</div>
          </div>
        </div>
        <div class="gda-resumo">
          <div class="gda-resumo-row"><span>Empresa</span><span class="js-res-empresa"></span></div>
          <div class="gda-resumo-row"><span>CNPJ</span><span class="js-res-cnpj"></span></div>
          <div class="gda-resumo-row"><span>Administrador</span><span class="js-res-admin"></span></div>
          <div class="gda-resumo-row"><span>E-mail de acesso</span><span class="js-res-email"></span></div>
          <div class="gda-resumo-row"><span>Status</span><span class="gda-pill-ativo js-res-status"></span></div>
        </div>
        <div class="gda-aviso mt-3">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <div>As credenciais de acesso serão enviadas para o e-mail do administrador e <strong>não poderão ser desfeitas</strong> sem contato com o suporte.</div>
        </div>
        <div class="d-flex justify-content-end gap-2 mt-3">
          <button type="button" class="gda-btn gda-btn-gray gda-btn-sm" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="gda-btn gda-btn-outline gda-btn-sm px-4" id="btnFinalizar"><?= $editar ? 'Salvar Alterações' : 'Cadastrar Empresa' ?></button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade gda-modal" id="modalSucesso" tabindex="-1" aria-labelledby="tituloSucesso" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog gda-dialog-sucesso">
      <div class="modal-content px-md-5 py-4">
        <div class="text-center">
          <div class="gda-modal-icon gda-icon-lg mx-auto"><i class="fa-solid fa-circle-info"></i></div>
          <div class="gda-modal-title mt-3" id="tituloSucesso"><?= $editar ? 'Empresa atualizada com sucesso!' : 'Empresa cadastrada com sucesso!' ?></div>
          <div class="gda-modal-text gda-sucesso-texto mx-auto">A empresa e o acesso do administrador foram configurados. Um e-mail foi enviado com as credenciais de acesso.</div>
        </div>
        <div class="gda-resumo mt-4 px-4 py-3">
          <div class="d-flex align-items-center gap-3 pb-2 mb-3 gda-sucesso-head">
            <div class="gda-clip gda-clip-sucesso"><i class="fa-solid fa-briefcase"></i></div>
            <div class="flex-grow-1">
              <div class="gda-texto-verde"><span class="js-res-empresa"></span> #05</div>
              <div class="gda-texto-cinza">CNPJ: <span class="js-res-cnpj"></span></div>
            </div>
            <span class="gda-pill-ativo js-res-status"></span>
          </div>
          <div class="row gda-sucesso-info">
            <div class="col-6 mb-3">Administrador<div class="text-dark js-res-admin"></div></div>
            <div class="col-6 mb-3">E-mail de acesso<div class="text-dark js-res-email"></div></div>
            <div class="col-6">Processos ativos<div class="text-dark">0 Processos</div></div>
            <div class="col-6">Data de cadastro<div class="text-dark js-data-hoje"></div></div>
          </div>
        </div>
        <div class="gda-aviso mt-3">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <div>O <strong>Administrador Sênior</strong> recebeu as credenciais no e-mail <strong class="js-res-email"></strong> e já pode acessar a plataforma para cadastrar seus funcionários e clientes.</div>
        </div>
        <div class="row g-2 mt-3">
          <div class="col-md-4"><a href="<?= base_url('dashboard' . ($editar ? '' : '?nova=1')) . '#empresas' ?>" class="gda-btn gda-btn-outline gda-btn-sm w-100">Ver todas as empresas</a></div>
          <div class="col-md-4"><button type="button" class="gda-btn gda-btn-outline gda-btn-sm w-100" id="btnEditarEmpresa">Editar empresa</button></div>
          <div class="col-md-4"><a href="<?= base_url('cadastrar-empresa') ?>" class="gda-btn gda-btn-outline gda-btn-sm w-100">Adicionar outra empresa</a></div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/js/cadastro_empresa.js') ?>"></script>
</body>
</html>
