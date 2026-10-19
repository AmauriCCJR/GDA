/* ================================================
   Listagem de Movimentações / Notificações
   Filtros (Todas / Não lidas / Lidas), busca e paginação na mesma página.
   O estado "lida" fica no sessionStorage até existir back-end.
   ================================================ */

const listaMov = document.getElementById('listaMov');
const MOVIMENTACOES = JSON.parse(listaMov.dataset.movimentacoes);
const TERMOS = JSON.parse(listaMov.dataset.termos);
const URL_DETALHE = listaMov.dataset.urlDetalhe;
const SUFIXO = listaMov.dataset.sufixo;

const POR_PAGINA = 8;
const CHAVE_LIDAS = 'gda_mov_lidas';

let filtro = new URLSearchParams(location.search).get('filtro') || 'todas';
let pagina = 1;
let busca = '';

function lerLidas() {
  try { return JSON.parse(sessionStorage.getItem(CHAVE_LIDAS) || '[]'); } catch (e) { return []; }
}

function salvarLidas(ids) {
  try { sessionStorage.setItem(CHAVE_LIDAS, JSON.stringify(ids)); } catch (e) {}
}

function estaLida(mov) {
  return mov.lida || lerLidas().includes(mov.id);
}

function filtradas() {
  return MOVIMENTACOES.filter(mov => {
    if (filtro === 'nao-lidas' && estaLida(mov)) return false;
    if (filtro === 'lidas' && !estaLida(mov)) return false;
    if (busca) {
      const texto = `${mov.titulo} ${mov.resumo} ${mov.empresa} ${mov.descricao}`.toLowerCase();
      if (!texto.includes(busca)) return false;
    }
    return true;
  });
}

function renderizar() {
  const plural = TERMOS.plural;
  const total = MOVIMENTACOES.length;
  const naoLidas = MOVIMENTACOES.filter(m => !estaLida(m)).length;

  // Cabeçalho, breadcrumb e resumo mudam conforme o filtro
  const titulos = {
    'todas':     `Todas as ${plural.toLowerCase()}`,
    'nao-lidas': `${plural} não lidas`,
    'lidas':     `${plural} lidas`,
  };
  document.getElementById('tituloLista').textContent = titulos[filtro];
  document.getElementById('crumbAtual').textContent = filtro === 'todas' ? plural : titulos[filtro];

  const resumo = document.getElementById('resumoTexto');
  if (filtro === 'todas') {
    resumo.innerHTML = naoLidas
      ? `${total} ${plural} · <span class="verde">${naoLidas} Não lidas</span>`
      : `${total} ${plural.toLowerCase()}`;
  } else if (filtro === 'nao-lidas') {
    resumo.textContent = naoLidas ? `${naoLidas} ${plural} não lidas` : '0 não lidas';
  } else {
    resumo.textContent = `${total - naoLidas} ${plural}`;
  }
  document.getElementById('btnMarcarTodas').classList.toggle('d-none', naoLidas === 0 || filtro === 'lidas');

  document.querySelectorAll('[data-filtro]').forEach(b => {
    if (b.classList.contains('gda-filtro')) b.classList.toggle('active', b.dataset.filtro === filtro);
  });

  // Lista paginada
  const itens = filtradas();
  const paginas = Math.max(1, Math.ceil(itens.length / POR_PAGINA));
  pagina = Math.min(pagina, paginas);

  const lista = listaMov;
  lista.innerHTML = '';
  itens.slice((pagina - 1) * POR_PAGINA, pagina * POR_PAGINA).forEach(mov => {
    const a = document.createElement('a');
    a.className = 'gda-mov-item';
    a.href = URL_DETALHE + mov.id + SUFIXO;
    a.innerHTML = `
      <div class="gda-notif-icon-wrap"><i class="fa-solid fa-bell"></i></div>
      <div>
        <div class="gda-notif-name"></div>
        <div class="gda-notif-desc"></div>
        <div class="gda-notif-time"></div>
      </div>
      ${estaLida(mov) ? '' : '<span class="gda-mov-dot" title="Não lida"></span>'}`;
    a.querySelector('.gda-notif-name').textContent = mov.titulo;
    a.querySelector('.gda-notif-desc').textContent = mov.resumo;
    a.querySelector('.gda-notif-time').textContent = mov.tempo;
    lista.appendChild(a);
  });

  // Estado vazio
  const vazio = itens.length === 0;
  document.getElementById('vazioMov').classList.toggle('d-none', !vazio);
  if (vazio) {
    const semNaoLidas = filtro === 'nao-lidas' && !busca;
    document.getElementById('vazioTitulo').textContent = semNaoLidas
      ? 'Nenhuma notificação não lida'
      : `Nenhuma ${TERMOS.singular.toLowerCase()} encontrada`;
    document.getElementById('vazioTexto').textContent = semNaoLidas
      ? `Você está em dia! Todas as ${plural.toLowerCase()} já foram visualizadas.`
      : 'Tente buscar por outro termo ou trocar o filtro.';
  }

  // Paginação
  const pag = document.getElementById('paginacao');
  pag.innerHTML = '';
  if (vazio) return;

  const botao = (conteudo, alvo, opcoes = {}) => {
    const b = document.createElement('button');
    b.type = 'button';
    b.innerHTML = conteudo;
    b.disabled = !!opcoes.desabilitado;
    if (opcoes.ativo) b.classList.add('active');
    b.addEventListener('click', () => { pagina = alvo; renderizar(); window.scrollTo({ top: 0 }); });
    pag.appendChild(b);
  };

  botao('<i class="fa-solid fa-chevron-left"></i>', pagina - 1, { desabilitado: pagina === 1 });
  for (let i = 1; i <= paginas; i++) botao(String(i), i, { ativo: i === pagina });
  botao('<i class="fa-solid fa-chevron-right"></i>', pagina + 1, { desabilitado: pagina === paginas });
}

document.querySelectorAll('[data-filtro]').forEach(b => {
  b.addEventListener('click', () => {
    filtro = b.dataset.filtro;
    pagina = 1;
    renderizar();
  });
});

document.getElementById('buscaMov').addEventListener('input', e => {
  busca = e.target.value.trim().toLowerCase();
  pagina = 1;
  renderizar();
});

document.getElementById('btnMarcarTodas').addEventListener('click', () => {
  salvarLidas(MOVIMENTACOES.map(m => m.id));
  renderizar();
});

renderizar();
