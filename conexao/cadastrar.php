<?php
session_start();

include("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

// consulta do banco de dados
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $query);

// verificação do cadastro
if (mysqli_num_rows($result) > 0) {
    header("Location: cadastro.php");
    $_SESSION['msg'] = "Já existe um cadastro com esse email";
} else if (strlen($senha) < 6) {
    header("Location: cadastro.php");
    $_SESSION['msg'] = "Senha precisa conter no mínimo 7 caracteres";
} else {
    
    $result_usuario = "INSERT INTO usuarios (nome, email, senha, data_criacao) VALUES ('$nome', '$email', '$senha', now())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if (mysqli_affected_rows($conn)) {
        header("Location: ../html-php/noParecerista.php");
        $_SESSION['username'] = $nome;
        $_SESSION['logged_in'] = true;
    } else {
        $_SESSION['msg'] = "Erro no cadastro";
    }
}
?>
