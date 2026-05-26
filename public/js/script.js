
function enviarWhatsApp() {
  var erro = "";
  const erros_form = document.getElementById('erros_form');
  const erro_header = document.getElementById('erro_header');
  const erros_text = document.getElementById('erros_text');
  const campo_nome = document.getElementById('nome');
  const campo_email = document.getElementById('email');
  const campo_empresa = document.getElementById('empresa');
  const campo_documento = document.getElementById('documento');
  const campo_telefone = document.getElementById('telefone');
  const campo_mensagem = document.getElementById('mensagem');



  esconderErros(erros_form, erro_header, erros_text, erro);

  // COLOQUE SEU NÚMERO AQUI (Apenas números, com DDD e código do país)
  const meuNumero = "5511975862805";

  if (campo_nome.value == "") {
    erro += 'Por favor, digite seu nome';
    alterarCorDoInput(campo_nome);
  } else{
    normalizarCorDoInput(campo_nome);
  }
  if (campo_email.value == "") {
    alterarCorDoInput(campo_email);
    erro += '<br>Por favor, digite seu e-mail';
  }else{
    normalizarCorDoInput(campo_email);
  }
  if (campo_empresa.value == "") {
    alterarCorDoInput(campo_empresa);
    erro += '<br>Por favor, digite o nome da empresa';
  }else{
    normalizarCorDoInput(campo_empresa);
  }
  if (campo_telefone.value == "") {
    alterarCorDoInput(campo_telefone);
    erro += '<br>Por favor, digite um telefone para contato';
  }else{
    normalizarCorDoInput(campo_telefone);
  }
  if (campo_mensagem.value == "") {
    alterarCorDoInput(campo_mensagem);
    erro += '<br>Por favor, digite uma mensagem';
  }else{
    normalizarCorDoInput(campo_mensagem);
  }
  if (erro !== "") {

    erros_text.innerHTML = erro;
    mostrarErros(erros_form, erro_header, erros_text);


  } else {


    const texto = `Olá! Meu nome é ${campo_nome.value} essas são minhas informações: \n  %0AEmail: ${campo_email.value} \n %0Acpf/cnpj: ${campo_documento.value} \n %0Aempresa: ${campo_empresa.value}\n %0Atelefone: ${campo_telefone.value} \n %0AMensagem: ${campo_mensagem.value}`;

    // Monta o link da API
    const url = `https://api.whatsapp.com/send?phone=${meuNumero}&text=${texto}`;

    // Abre em uma nova aba
    window.open(url, '_blank');

  }
}
function alterarCorDoInput(input) {
  input.style.borderColor = "red";
}
function normalizarCorDoInput(input) {
  input.style.borderColor = "#14AE5C";
}
function mostrarErros(CampoUm, CampoDois, CampoTres) {
  CampoUm.classList.remove('esconder');
  CampoUm.classList.add('mostrar');
  CampoUm.classList.add('erros_form');
  CampoDois.classList.remove('esconder');
  CampoDois.classList.add('mostrar')
  CampoTres.classList.remove('esconder');
  CampoTres.classList.add('mostrar');

}

function esconderErros(CampoUm, CampoDois, CampoTres) {
  CampoUm.classList.remove('mostrar');
  CampoUm.classList.remove('erros_form');
  CampoUm.classList.add('esconder');
  CampoDois.classList.remove('mostrar');
  CampoDois.classList.add('esconder')
  CampoTres.classList.remove('mostrar');
  CampoTres.classList.add('esconder');
  CampoTres = "";
}


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
  btn.addEventListener('click', function () {
    document.querySelectorAll('.gda_filter_btn').forEach(b => b.classList.remove('gda_filter_active'));
    this.classList.add('gda_filter_active');
    const filter = this.dataset.filter;
    document.querySelectorAll('.gda_faq_item').forEach(item => {
      item.style.display = (filter === 'all' || item.dataset.category === filter) ? '' : 'none';
    });
  });
});
document.getElementById('faqSearch').addEventListener('input', function () {
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



