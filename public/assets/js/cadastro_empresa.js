/* ================================================
   Cadastro de Empresa (Admin da Plataforma)
   Uma única página com 5 passos em abas + modais de saída, confirmação e sucesso.
   Tudo é simulado no navegador — nada é enviado ao servidor ainda.
   ================================================ */

const formEmpresa = document.getElementById('formEmpresa');
const EDITAR = formEmpresa.dataset.editar === '1';
const ROTAS = {
  dashboard: { url: formEmpresa.dataset.urlDashboard, texto: 'Voltar para dashboard' },
  empresas:  { url: formEmpresa.dataset.urlEmpresas,  texto: 'Voltar para Empresas' },
};

const TOTAL_PASSOS = 5;
let passoAtual = 0;

const secoes    = document.querySelectorAll('.gda-step');
const abas      = document.querySelectorAll('#abasCadastro [data-ir]');
const dots      = document.querySelectorAll('#dotsPassos .gda-step-dot');
const btnVoltar = document.getElementById('btnVoltar');
const btnAvancar = document.getElementById('btnAvancar');

const modalSair      = new bootstrap.Modal(document.getElementById('modalSair'));
const modalConfirmar = new bootstrap.Modal(document.getElementById('modalConfirmar'));
const modalSucesso   = new bootstrap.Modal(document.getElementById('modalSucesso'));

/* ---------- Navegação entre passos ---------- */
function mostrarPasso(n) {
  passoAtual = n;
  secoes.forEach(s => s.classList.toggle('d-none', Number(s.dataset.passo) !== n));
  abas.forEach(a => a.classList.toggle('active', Number(a.dataset.ir) === n));
  dots.forEach((d, i) => d.classList.toggle('active', i === n));

  if (n === 0) {
    btnVoltar.textContent = 'Cancelar';
    btnVoltar.className = 'gda-btn gda-btn-danger gda-btn-step';
  } else {
    btnVoltar.textContent = 'Anterior';
    btnVoltar.className = 'gda-btn gda-btn-primary gda-btn-step';
  }

  const ultimo = n === TOTAL_PASSOS - 1;
  btnAvancar.textContent = ultimo ? (EDITAR ? 'Salvar Alterações' : 'Cadastrar Empresa') : 'Próximo';
  btnAvancar.style.minWidth = ultimo ? '170px' : '';
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function validarPasso(n) {
  const secao = document.querySelector(`.gda-step[data-passo="${n}"]`);
  let valido = true;

  secao.querySelectorAll('[required]').forEach(campo => {
    const vazio = campo.value.trim() === '';
    const emailRuim = campo.type === 'email' && !vazio && !campo.value.includes('@');
    campo.classList.toggle('invalido', vazio || emailRuim);
    if (vazio || emailRuim) valido = false;
  });

  if (n === 4 && !validarSenha()) valido = false;
  return valido;
}

document.querySelectorAll('.gda-input').forEach(campo => {
  campo.addEventListener('input', () => campo.classList.remove('invalido'));
});

abas.forEach(aba => aba.addEventListener('click', () => mostrarPasso(Number(aba.dataset.ir))));

btnVoltar.addEventListener('click', () => {
  if (passoAtual === 0) abrirSaida('empresas');
  else mostrarPasso(passoAtual - 1);
});

btnAvancar.addEventListener('click', () => {
  if (!validarPasso(passoAtual)) return;

  if (passoAtual < TOTAL_PASSOS - 1) {
    mostrarPasso(passoAtual + 1);
    return;
  }

  // Último passo: confere todos antes de abrir a confirmação
  for (let i = 0; i < TOTAL_PASSOS; i++) {
    if (!validarPasso(i)) { mostrarPasso(i); return; }
  }
  preencherResumo();
  modalConfirmar.show();
});

/* ---------- Saída com perda de dados ---------- */
function abrirSaida(destino) {
  const rota = ROTAS[destino];
  const btn = document.getElementById('btnConfirmarSaida');
  btn.href = rota.url;
  btn.textContent = rota.texto;
  modalSair.show();
}

document.querySelectorAll('[data-sair]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    abrirSaida(link.dataset.sair);
  });
});

/* ---------- Desfoque do fundo com modal aberto ---------- */
document.addEventListener('show.bs.modal', () => document.body.classList.add('gda-blur'));
document.addEventListener('hidden.bs.modal', () => {
  if (!document.querySelector('.modal.show')) document.body.classList.remove('gda-blur');
});

/* ---------- Máscaras simples ---------- */
const MASCARAS = {
  cnpj: v => v.slice(0, 14).replace(/^(\d{2})(\d)/, '$1.$2').replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3').replace(/\.(\d{3})(\d)/, '.$1/$2').replace(/(\d{4})(\d)/, '$1-$2'),
  cpf:  v => v.slice(0, 11).replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d{1,2})$/, '$1-$2'),
  cep:  v => v.slice(0, 8).replace(/(\d{5})(\d)/, '$1-$2'),
  tel:  v => v.slice(0, 11).replace(/^(\d{2})(\d)/, '($1) $2').replace(/(\d)(\d{4})$/, '$1-$2'),
};

function aplicarMascaras(raiz) {
  raiz.querySelectorAll('[data-mascara]').forEach(campo => {
    campo.addEventListener('input', () => {
      campo.value = MASCARAS[campo.dataset.mascara](campo.value.replace(/\D/g, ''));
    });
  });
}
aplicarMascaras(document);

/* ---------- Contatos ---------- */
const listaContatos = document.getElementById('listaContatos');

function adicionarContato(dados = {}) {
  const box = document.createElement('div');
  box.className = 'gda-contato-box';
  box.innerHTML = `
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="js-titulo-contato"></h3>
      <button type="button" class="gda-btn-lixeira js-remover-contato" aria-label="Remover contato"><i class="fa-regular fa-trash-can"></i></button>
    </div>
    <div class="row gx-5">
      <div class="col-md-6">
        <label class="gda-label">Nome Completo <span class="req">*</span></label>
        <input class="gda-input" name="contatoNome" required>
      </div>
      <div class="col-md-6">
        <label class="gda-label">Cargo <span class="req">*</span></label>
        <input class="gda-input" name="contatoCargo" required>
      </div>
      <div class="col-md-6">
        <label class="gda-label">E-mail <span class="req">*</span></label>
        <input class="gda-input" name="contatoEmail" type="email" required>
      </div>
      <div class="col-md-6">
        <label class="gda-label">Telefone <span class="req">*</span></label>
        <input class="gda-input" name="contatoTelefone" data-mascara="tel" required>
      </div>
    </div>`;

  box.querySelector('[name=contatoNome]').value = dados.nome || '';
  box.querySelector('[name=contatoCargo]').value = dados.cargo || '';
  box.querySelector('[name=contatoEmail]').value = dados.email || '';
  box.querySelector('[name=contatoTelefone]').value = dados.telefone || '';

  box.querySelector('.js-remover-contato').addEventListener('click', () => {
    box.remove();
    numerarContatos();
  });
  box.querySelectorAll('.gda-input').forEach(c => c.addEventListener('input', () => c.classList.remove('invalido')));
  aplicarMascaras(box);

  listaContatos.appendChild(box);
  numerarContatos();
}

function numerarContatos() {
  const caixas = listaContatos.querySelectorAll('.gda-contato-box');
  caixas.forEach((c, i) => {
    c.querySelector('.js-titulo-contato').textContent = `Contato ${i + 1}`;
    // O primeiro contato é obrigatório
    c.querySelector('.js-remover-contato').classList.toggle('d-none', caixas.length === 1);
  });
}

document.getElementById('btnAddContato').addEventListener('click', () => adicionarContato());

/* ---------- Documentos (upload simulado) ---------- */
const TIPOS_ACEITOS = ['image/jpeg', 'image/png', 'application/pdf'];
const LIMITE_BYTES = 10 * 1024 * 1024;

const inputArquivo = document.getElementById('inputArquivo');
const erroArquivo  = document.getElementById('erroArquivo');
const estadosDoc = {
  vazio:      document.getElementById('docVazio'),
  progresso:  document.getElementById('docProgresso'),
  previa:     document.getElementById('docPrevia'),
  carregando: document.getElementById('docCarregando'),
  lista:      document.getElementById('docLista'),
};

let documentos = [];
let arquivoPendente = null;

function formatarTamanho(bytes) {
  if (bytes >= 1024 * 1024) return (bytes / 1024 / 1024).toFixed(1).replace('.', ',') + ' MB';
  return Math.max(1, Math.round(bytes / 1024)) + ' KB';
}

function mostrarEstadoDoc(estado) {
  Object.entries(estadosDoc).forEach(([nome, el]) => el.classList.toggle('d-none', nome !== estado));
}

function estadoBaseDoc() {
  mostrarEstadoDoc(documentos.length ? 'lista' : 'vazio');
}

function renderizarDocumentos() {
  const itens = document.getElementById('itensDocs');
  itens.innerHTML = '';
  documentos.forEach((doc, i) => {
    const item = document.createElement('div');
    item.className = 'gda-doc-item';
    item.innerHTML = `
      <div class="gda-clip"><i class="fa-solid fa-file-lines"></i></div>
      <div>
        <div class="gda-doc-nome"></div>
        <div class="gda-doc-info">${doc.tamanho} • ${doc.data}</div>
      </div>
      <button type="button" class="gda-btn-lixeira" aria-label="Excluir documento"><i class="fa-regular fa-trash-can"></i></button>`;
    item.querySelector('.gda-doc-nome').textContent = doc.nome;
    item.querySelector('button').addEventListener('click', () => {
      documentos.splice(i, 1);
      renderizarDocumentos();
      estadoBaseDoc();
    });
    itens.appendChild(item);
  });
}

function receberArquivo(arquivo) {
  erroArquivo.classList.add('d-none');
  if (!arquivo) return;

  if (!TIPOS_ACEITOS.includes(arquivo.type) || arquivo.size > LIMITE_BYTES) {
    erroArquivo.textContent = 'Arquivo inválido: envie JPG, PNG ou PDF de até 10MB.';
    erroArquivo.classList.remove('d-none');
    return;
  }

  arquivoPendente = arquivo;
  document.querySelectorAll('.js-pend-nome').forEach(el => el.textContent = arquivo.name);
  document.querySelectorAll('.js-pend-tam').forEach(el => el.textContent = formatarTamanho(arquivo.size));

  // Simula o envio com uma barra de progresso
  const barra = document.getElementById('barraProgresso');
  let pct = 0;
  barra.style.width = '0%';
  mostrarEstadoDoc('progresso');
  const timer = setInterval(() => {
    pct += 8;
    barra.style.width = Math.min(pct, 100) + '%';
    if (pct >= 100) {
      clearInterval(timer);
      mostrarEstadoDoc('previa');
    }
  }, 90);
}

document.querySelectorAll('.js-escolher').forEach(btn => btn.addEventListener('click', () => inputArquivo.click()));

inputArquivo.addEventListener('change', () => {
  receberArquivo(inputArquivo.files[0]);
  inputArquivo.value = '';
});

document.querySelectorAll('.js-drop').forEach(area => {
  area.addEventListener('dragover', e => { e.preventDefault(); area.classList.add('arrastando'); });
  area.addEventListener('dragleave', () => area.classList.remove('arrastando'));
  area.addEventListener('drop', e => {
    e.preventDefault();
    area.classList.remove('arrastando');
    receberArquivo(e.dataTransfer.files[0]);
  });
});

document.getElementById('linkPrevia').addEventListener('click', e => {
  e.preventDefault();
  if (arquivoPendente) window.open(URL.createObjectURL(arquivoPendente), '_blank');
});

document.getElementById('btnCancelarArquivo').addEventListener('click', () => {
  arquivoPendente = null;
  estadoBaseDoc();
});

document.getElementById('btnConfirmarArquivo').addEventListener('click', () => {
  mostrarEstadoDoc('carregando');
  setTimeout(() => {
    documentos.push({
      nome: arquivoPendente.name,
      tamanho: formatarTamanho(arquivoPendente.size),
      data: new Date().toLocaleDateString('pt-BR'),
    });
    arquivoPendente = null;
    renderizarDocumentos();
    mostrarEstadoDoc('lista');
  }, 900);
});

/* ---------- Senha ---------- */
const REGRAS = {
  tamanho:   s => s.length >= 8,
  numero:    s => /\d/.test(s),
  maiuscula: s => /[A-Z]/.test(s),
  especial:  s => /[^A-Za-z0-9]/.test(s),
};

const campoSenha  = document.getElementById('adminSenha');
const campoSenha2 = document.getElementById('adminSenha2');

function atualizarForcaSenha() {
  const senha = campoSenha.value;
  let pontos = 0;
  Object.entries(REGRAS).forEach(([nome, testa]) => {
    const ok = testa(senha);
    if (ok) pontos++;
    document.querySelector(`[data-regra="${nome}"]`).classList.toggle('ok', ok);
  });
  const barra = document.getElementById('forcaSenha');
  barra.style.width = (pontos * 25) + '%';
  barra.style.background = pontos <= 1 ? 'var(--gda-red)' : pontos <= 3 ? 'var(--gda-yellow)' : '#14ae5c';
}

function validarSenha() {
  const senha = campoSenha.value;
  // Na edição a senha é opcional: só valida se o usuário digitou algo
  if (EDITAR && senha === '' && campoSenha2.value === '') return true;

  const forte = Object.values(REGRAS).every(testa => testa(senha));
  const confere = senha === campoSenha2.value;
  campoSenha.classList.toggle('invalido', !forte);
  campoSenha2.classList.toggle('invalido', !confere);
  document.getElementById('erroSenha2').classList.toggle('d-none', confere || campoSenha2.value === '');
  return forte && confere;
}

campoSenha.addEventListener('input', atualizarForcaSenha);

document.querySelectorAll('[data-olho]').forEach(btn => {
  btn.addEventListener('click', () => {
    const campo = document.getElementById(btn.dataset.olho);
    const mostrar = campo.type === 'password';
    campo.type = mostrar ? 'text' : 'password';
    btn.querySelector('i').className = mostrar ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye';
  });
});

/* ---------- Permissões ---------- */
document.querySelectorAll('#permissoes .gda-perm').forEach(btn => {
  btn.addEventListener('click', () => {
    const ativo = btn.classList.toggle('ativo');
    btn.setAttribute('aria-pressed', ativo);
  });
});

/* ---------- Confirmação e sucesso ---------- */
function preencherResumo() {
  const valor = id => document.getElementById(id).value.trim();
  const ativa = valor('statusEmpresa') !== 'Desativado';

  document.querySelectorAll('.js-res-empresa').forEach(el => el.textContent = valor('razaoSocial'));
  document.querySelectorAll('.js-res-cnpj').forEach(el => el.textContent = valor('cnpj'));
  document.querySelectorAll('.js-res-admin').forEach(el => el.textContent = valor('adminNome'));
  document.querySelectorAll('.js-res-email').forEach(el => el.textContent = valor('adminEmail'));
  document.querySelectorAll('.js-res-status').forEach(el => {
    el.textContent = ativa ? 'Ativo' : 'Inativo';
    el.classList.toggle('inativo', !ativa);
  });
  document.querySelectorAll('.js-data-hoje').forEach(el => el.textContent = new Date().toLocaleDateString('pt-BR'));
}

document.getElementById('btnFinalizar').addEventListener('click', () => {
  modalConfirmar.hide();
  document.getElementById('modalConfirmar').addEventListener('hidden.bs.modal', () => modalSucesso.show(), { once: true });
});

document.getElementById('btnEditarEmpresa').addEventListener('click', () => {
  modalSucesso.hide();
  mostrarPasso(0);
});

/* ---------- Modo edição: dados mockados da Gesad ---------- */
function preencherEdicao() {
  const dados = {
    razaoSocial: 'Gesad Ltda', nomeFantasia: 'Gesad', cnpj: '12.345.678/0001-99', inscricaoEstadual: '123.456.789.000',
    emailResponsavel: 'responsavel@gesad.com.br', telefoneEmpresa: '(11) 3456-7890', ramo: 'Importação e exportação', statusEmpresa: 'Ativado',
    cep: '01310-100', rua: 'Av. Paulista', numero: '1220', complemento: 'Sala 501, 5º andar', bairro: 'Bela Vista', cidade: 'São Paulo', estado: 'SP', pais: 'Brasil',
    adminNome: 'Sanny Cristina Cantero dos Santos', adminEmail: 'sanny@gesad.com.br', adminTelefone: '(11) 97654-3210', adminCpf: '123.456.789-00',
  };
  Object.entries(dados).forEach(([id, v]) => { document.getElementById(id).value = v; });

  adicionarContato({ nome: 'Sanny Cantero', cargo: 'Gerente Geral', email: 'sannycantero@gesad.com.br', telefone: '(11) 98765-4321' });
  adicionarContato({ nome: 'Mariela Britez', cargo: 'Gerente Geral', email: 'marielabritez@gesad.com.br', telefone: '(11) 98765-1234' });

  documentos = [
    { nome: 'Comprovante_cnpj.pdf', tamanho: '2,3 MB', data: '10/04/2026' },
    { nome: 'Contrato_social.jpg', tamanho: '1,1 MB', data: '10/04/2026' },
    { nome: 'Alvara_funcionamento.png', tamanho: '9 KB', data: '10/04/2026' },
  ];
  renderizarDocumentos();
  document.querySelectorAll('#permissoes .gda-perm').forEach(b => { b.classList.add('ativo'); b.setAttribute('aria-pressed', true); });
}

/* ---------- Início ---------- */
if (EDITAR) preencherEdicao();
else adicionarContato();
estadoBaseDoc();
mostrarPasso(0);
