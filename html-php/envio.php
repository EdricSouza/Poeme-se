<?php
session_start();
include("../conexao/conexao.php");
?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio do Artigo</title>
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
        <form action="../conexao/enviarTexto.php" method="post">
            <label for="input-text">Digite aqui seu texto</label> <br>
            <textarea name="texto" id="input-text" cols="80" rows="40"></textarea> <br>

            <label for="input-image">Envie uma imagem (opicional)</label> <br>
            <input type="file" id="input-image"/> <br>

            <label for="input-name">Nome</label> <br>
            <input type="text" name="nome" id="input-writername" placeholder="João Pedro" minlength="10" maxlength="50"> <br>

            <label for="input-email">Email</label> <br>
            <input type="email" name="email" id="input-writeremail" placeholder="exemplo@gmail.com"> <br>

            <label for="input-cpf">CPF</label> <br>
            <input type="text" id="cpf" name="cpf">

            <input type="submit" value="Enviar">
        </form>
        <?PHP
            if(!isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </main>
</body>
</html>