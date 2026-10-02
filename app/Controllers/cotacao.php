<?php

namespace App\Controllers;

class Cotacao extends BaseController
{
    public function index()
    {
        $moedas = 'USD-BRL,EUR-BRL,GBP-BRL,CAD-BRL,PYG-BRL';
        $token = getenv('awesomeapi.token'); // vamos guardar no .env

        $url = "https://economia.awesomeapi.com.br/json/last/{$moedas}?token={$token}";

        $client = \Config\Services::curlrequest();

        try {
            $response = $client->get($url);
            $data = $response->getBody();

            return $this->response
                ->setContentType('application/json')
                ->setBody($data);

        } catch (\Exception $e) {
            return $this->response
                ->setStatusCode(500)
                ->setJSON(['erro' => 'Não foi possível obter as cotações.']);
        }
    }
}
?>