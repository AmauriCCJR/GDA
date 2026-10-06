<?php

namespace App\Controllers;

class RecuperarSenha extends BaseController
{
    public function index()
    {
        return view('recuperar_senha');
    }

    public function enviar()
    {
        // TODO: enviar o e-mail de recuperação (PHPMailer) com link/token para redefinir-senha.
        // Por enquanto simula o envio e leva direto para a tela de redefinição.
        return redirect()->to(base_url('redefinir-senha'));
    }
}
