function enviarWhatsApp() {
        // COLOQUE SEU NÚMERO AQUI (Apenas números, com DDD e código do país)
        const meuNumero = "5511975862805"; 

        // Captura os valores
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const empresa = document.getElementById('empresa').value;
        const documento = document.getElementById('documento').value;
        const telefone = document.getElementById('telefone').value;
        const mensagem = document.getElementById('mensagem').value;

        // Validação simples
        if(!nome || !documento || !telefone) {
            alert("Por favor, preencha todos os campos obrigatórios.");
            return;
        }

        // Monta o texto da mensagem (codificado para URL)
        const texto = `*Novo Contato via GDA*%0A%0A` +
                      `*Nome:* ${nome}%0A` +
                      `*E-mail:* ${email}%0A` +
                      `*Empresa:* ${empresa}%0A` +
                      `*CPF/CNPJ:* ${documento}%0A` +
                      `*Telefone:* ${telefone}%0A` +
                      `*Mensagem:* ${mensagem}`;

        // Monta o link da API
        const url = `https://api.whatsapp.com/send?phone=${meuNumero}&text=${texto}`;

        // Abre em uma nova aba
        window.open(url, '_blank');
    }