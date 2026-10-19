<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once APPPATH . 'Views/mail/src/Exception.php';
require_once APPPATH . 'Views/mail/src/PHPMailer.php';
require_once APPPATH . 'Views/mail/src/SMTP.php';

class RecuperarSenha extends BaseController
{
    public function index()
    {
        return view('recuperar_senha');
    }

    public function enviar()
    {
        $destinatario = trim((string) $this->request->getPost('destinatario'));

        if (! filter_var($destinatario, FILTER_VALIDATE_EMAIL)) {
            return redirect()->to(base_url('recuperar-senha'))
                ->with('erro', 'Informe um e-mail válido.');
        }

        try {
            $this->enviarEmail($destinatario);
        } catch (Exception $e) {
            log_message('error', 'Falha ao enviar e-mail de recuperação: {erro}', ['erro' => $e->getMessage()]);

            return redirect()->to(base_url('recuperar-senha'))
                ->with('erro', 'Não foi possível enviar o e-mail agora. Tente novamente em instantes.');
        }

        return redirect()->to(base_url('login'))
            ->with('aviso', 'Enviamos um link para redefinir sua senha para ' . $destinatario . '.');
    }

    /** Credenciais SMTP vêm do .env (chaves email.*), lidas por Config\Email. */
    private function enviarEmail(string $destinatario): void
    {
        $config = config('Email');
        $link   = base_url('redefinir-senha');

        // O template tem o link fixo de localhost; troca pelo baseURL atual.
        $corpo = file_get_contents(APPPATH . 'Views/mail/email_recuperacao_senha.html');
        $corpo = str_replace('http://localhost/GDA/public/redefinir-senha', $link, $corpo);

        $mail = new PHPMailer(true);
        $mail->CharSet    = PHPMailer::CHARSET_UTF8;
        $mail->isSMTP();
        $mail->Host       = $config->SMTPHost;
        $mail->SMTPAuth   = true;
        $mail->Username   = $config->SMTPUser;
        $mail->Password   = $config->SMTPPass;
        $mail->SMTPSecure = $config->SMTPCrypto === 'tls' ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $config->SMTPPort;

        $mail->setFrom($config->fromEmail, $config->fromName);
        $mail->addAddress($destinatario);

        $mail->isHTML(true);
        $mail->Subject = 'Recuperação de Senha - GDA';
        $mail->Body    = $corpo;
        $mail->AltBody = 'Para redefinir sua senha, acesse: ' . $link;

        $mail->send();
    }
}
