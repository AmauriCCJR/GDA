/* ================================================
   Dashboard: abas que trocam só o conteúdo (sem sair da página).
   A aba aberta fica no #hash da URL, para recarregar/voltar nela.
   ================================================ */

const abas = document.querySelectorAll('#abasPainel [data-aba]');
const paineis = document.querySelectorAll('.gda-aba-painel');

function abrirAba(chave) {
  const existe = Array.from(paineis).some(p => p.dataset.painel === chave);
  if (!existe) chave = 'dashboard';

  paineis.forEach(p => { p.hidden = p.dataset.painel !== chave; });
  abas.forEach(a => a.classList.toggle('active', a.dataset.aba === chave));
}

abas.forEach(aba => {
  aba.addEventListener('click', e => {
    e.preventDefault();
    const chave = aba.dataset.aba;
    const url = location.pathname + location.search + (chave === 'dashboard' ? '' : '#' + chave);
    history.pushState({ aba: chave }, '', url);
    abrirAba(chave);
  });
});

window.addEventListener('popstate', () => abrirAba(location.hash.slice(1)));
abrirAba(location.hash.slice(1));

document.querySelectorAll('.gda-bar-fill[data-largura]').forEach(barra => {
  barra.style.width = barra.dataset.largura + '%';
});

document.getElementById('buscaEmpresa')?.addEventListener('input', function () {
  const q = this.value.toLowerCase();
  document.querySelectorAll('.empresa-item').forEach(item => {
    item.style.display = item.dataset.nome.includes(q) ? '' : 'none';
  });
});
