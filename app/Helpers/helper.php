<?php

function RetornoChaveApi()
{
    $chave = "64072b1d9c4f1ea12f3d0d530ce10cfbaeffe55916fd73d0fa3d8e7e7a9cdab6";
    return $chave;
}



function CotacaoAtual($siglaPais)
{
    /*
    $token = RetornoChaveApi();

    if ($siglaPais === 'PYG-BRL') {
        $url = "https://economia.awesomeapi.com.br/json/last/{$siglaPais}?token={$token}";
        $json = file_get_contents($url);

        if ($json === false) return "Erro ao consultar API";

        $data = json_decode($json, true);
        $chave = str_replace('-', '', $siglaPais);
        $cotacao = $data[$chave]['bid'] ?? "Cotação não encontrada";
        return number_format($cotacao, 6, ',', '.');
    } else {
        $url = "https://economia.awesomeapi.com.br/json/last/{$siglaPais}?token={$token}";
        $json = file_get_contents($url);

        if ($json === false) return "Erro ao consultar API";

        $data = json_decode($json, true);
        $chave = str_replace('-', '', $siglaPais);
        $cotacao = $data[$chave]['bid'] ?? "Cotação não encontrada";
        return number_format($cotacao, 2, ',', '.');
    }
    */
}

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

</script>