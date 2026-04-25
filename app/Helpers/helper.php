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
