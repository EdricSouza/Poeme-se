<?php
session_start();
include("../conexao/conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
    <form action="../conexao/cadastrar.php" id="formcadastro" name="formcadastro" method="post">
		<label>Nome completo:</label><input type="text" name="nome"><br><br>
		<label>Email:</label><input type="email" name="email"><br><br>
		<label>Senha:</label><input type="password" name="senha"><br><br>
		<input type="submit" value="Enviar" name="enviar">
	</form>
    <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        echo '</br>';
    }

?>
        <a href="login.php" target="_self">Já tenho uma conta</a>
    </main>
</body>
</html>