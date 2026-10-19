/* Ao abrir o detalhe, a movimentação passa a contar como lida na listagem (ver movimentacoes.js) */
(function () {
  const id = Number(document.getElementById('detalheMov').dataset.id);
  try {
    const lidas = JSON.parse(sessionStorage.getItem('gda_mov_lidas') || '[]');
    if (!lidas.includes(id)) lidas.push(id);
    sessionStorage.setItem('gda_mov_lidas', JSON.stringify(lidas));
  } catch (e) {}
})();
