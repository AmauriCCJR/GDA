<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include '../includes/head.php'?>
</head>

<body>
    <section>
        <img src="../../assets/img/logo.png" alt="Uma logo da empresa GDA, um G verde com camionhos de circuitos brancos
         saindo de dentro da parte verde">
         <label>Gestão de Processos Aduaneiros</label>

    </section>
    <article>
        <h1>Teste de Login</h1>
        <form action="controller.php?id=2" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Entrar" name="submit" onclick="">
    </article>
</body>

</html>