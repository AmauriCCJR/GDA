<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$email_destino = $_POST['destinatario'];
$mail = new PHPMailer(true);

try {

//Configurações de server
   $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'amauritestesapp@gmail.com'; //Email que vai enviar o email(geralmente do servidor ou da empresa)
    $mail -> Password = 'qwiw ajox puuy kzwj'; //Senha para uso do email em aplicações (aleatoria e unica de cada email)
    $mail -> SMTPSecure = PHPMailer:: ENCRYPTION_SMTPS;
    $mail -> Port = 465;

    $mail -> setFrom('amauritestesapp@gmail.com', 'Recuperacao de senha');
    $mail -> addAddress($email_destino);

    $mail->isHTML(true);
$mail->Subject = 'Recuperação de Senha - GDA';
$mail->Body    = file_get_contents('email_recuperacao_senha.html');
$mail->AltBody = 'Para redefinir sua senha, acesse: http://localhost/GDA/public/login.php';

$mail->send();
header("location: ../login.php");


}


catch (Exception $e) {
    echo "Mensagem não foi enviada. Erro do mailer: {$mail->ErrorInfo}";
}


?>