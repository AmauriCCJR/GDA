/* ================================================
   Detalhes da empresa: modal de impressão do relatório
   A janela de impressão do navegador gera o PDF ("Salvar como PDF").
   ================================================ */

const agora = new Date();
document.querySelectorAll('.js-data-hoje').forEach(el => el.textContent = agora.toLocaleDateString('pt-BR'));
document.querySelectorAll('.js-hora-agora').forEach(el => el.textContent = agora.toLocaleTimeString('pt-BR', { hour: '2-digit', minute: '2-digit' }));

const modalImprimir = document.getElementById('modalImprimir');
modalImprimir.addEventListener('show.bs.modal', () => document.body.classList.add('gda-blur'));
modalImprimir.addEventListener('hidden.bs.modal', () => document.body.classList.remove('gda-blur'));

document.getElementById('btnImprimir').addEventListener('click', () => {
  const orientacao = document.getElementById('selOrientacao').value || 'portrait';
  let estiloPagina = document.getElementById('estiloPagina');
  if (!estiloPagina) {
    estiloPagina = document.createElement('style');
    estiloPagina.id = 'estiloPagina';
    document.head.appendChild(estiloPagina);
  }
  estiloPagina.textContent = `@page { size: A4 ${orientacao}; margin: 12mm; }`;
  bootstrap.Modal.getInstance(modalImprimir).hide();
  modalImprimir.addEventListener('hidden.bs.modal', () => window.print(), { once: true });
});
