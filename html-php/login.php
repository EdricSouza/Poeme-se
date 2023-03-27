<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <header>
    <img src="../img/LetrasPretas.png" alt="Logo da Poeme-se" width="10%">
        <nav>
            <ul>
                <li><a href="index.html" target="_self">Revista</a></li>
                <li><a href="edital.html" target="_self">Edital</a></li>
                <li><a href="envio.php" target="_self">Envio</a></li>
                <li><a href="login.php" target="_self">Login</a></li>
                <li><a href="galeria.html" target="_self">Galeria</a></li>
            </ul>
        </nav>
        <hr>
    </header>
    <main>
        <form action="../conexao/loginValidate.php" method="post">

            <label for="">Email</label>
            <input type="email" name="email" id="input-email">

            <label for="">Senha</label>
            <input type="password" name="senha" id="input-password">

            <input type="submit" name="submit" value="Entrar">
        </form>
        <a href="cadastro.php" target="_self">Não tenho uma conta</a>
    </main>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
</body>
</html>