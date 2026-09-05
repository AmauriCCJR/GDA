<?php
function conexao(){
    $nome_servidor = 'localhost';
    $nome_usuario = 'root';
    $senha ='';
    $nome_banco = 'gda';

    $conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
if ($conecta -> connect_error){
    die("conexão falhou: " . $conecta -> connect_error);
}
return $conecta;
}
?>