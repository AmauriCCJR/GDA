<?php



?>


<script>
    /*
    async function getCotacao(siglaPais) {
  const token = "64072b1d9c4f1ea12f3d0d530ce10cfbaeffe55916fd73d0fa3d8e7e7a9cdab6";
  const url = `https://economia.awesomeapi.com.br/json/last/${siglaPais}?token=${token}`;

  try {
    const response = await fetch(url);

    if (!response.ok) return "Erro ao consultar API";

    const data = await response.json();
    const chave = siglaPais.replace('-', '');
    const cotacao = data[chave]?.bid ?? "Cotação não encontrada";

    if (typeof cotacao !== 'number' && isNaN(parseFloat(cotacao))) {
      return cotacao;
    }

    const decimais = siglaPais === 'PYG-BRL' ? 6 : 2;

    return parseFloat(cotacao).toLocaleString('pt-BR', {
      minimumFractionDigits: decimais,
      maximumFractionDigits: decimais,
    });

  } catch (error) {
    return "Erro ao consultar API";
  }
}

async function carregarCotacoes() {
    document.getElementById('cotacao-usd').textContent = await getCotacao('USD-BRL');
    document.getElementById('cotacao-eur').textContent = await getCotacao('EUR-BRL');
    document.getElementById('cotacao-pyg').textContent = await getCotacao('PYG-BRL');
    document.getElementById('cotacao-gbp').textContent = await getCotacao('GBP-BRL');
    document.getElementById('cotacao-cad').textContent = await getCotacao('CAD-BRL');
 }
    */
function toggleSenha() {
      const input = document.getElementById('senhaInput');
      const icon = document.getElementById('olhoIcon');
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
      }
    }

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