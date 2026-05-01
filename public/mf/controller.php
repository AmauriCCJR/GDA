<?php
include_once '../includes/conexao.php';
$sql = "SELECT * FROM teste";
$resultado = conexao() -> query($sql);
$idpagina = $_GET['id'];
if ($idpagina == 1) {
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $senha_criptografada = hash('sha256', $senha);
    $sql = "INSERT INTO teste (email, senha) VALUES ('" . $email . "', '" . $senha_criptografada . "')";
    if (conexao() -> query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . conexao() -> error;
    }
}

elseif ($idpagina == 2) {
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $senha_criptografada = hash('sha256', $senha);
    $sql = "SELECT * FROM teste WHERE email = '" . $email . "' AND senha = '" . $senha_criptografada . "'";
    $resultado = conexao() -> query($sql);
    if ($resultado -> num_rows > 0) {
     while ($linha = $resultado -> fetch_assoc()) {
        echo "email: " . $linha["email"] . " <br>-<br> Senha: " . $linha["senha"] . "<br>";
     }
    } else {
        echo "Nenhum resultado encontrado.";
    }

} else {
    echo '<p>Pagina não encontrada</p>';
}

?>