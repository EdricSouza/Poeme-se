<?php
session_start();

if(!empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        // Prepara a consulta SQL com espaços reservados para as variáveis de entrada
        $stmt = $conn->prepare("SELECT nome, nivel_admin FROM usuarios WHERE email = ? and senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();

        // Recupera os resultados da consulta
        $result = $stmt->get_result();
        
        // Verifica se há resultados
        if ($result->num_rows == 1 && password_verify($senha, PASSWORD_DEFAULT) == $senhahast) {
            
            // Recupera o nome e o nível do usuário
            $row = $result->fetch_assoc();
            $nome = $row['nome'];
            $nivel = $row['nivel_admin'];

            // Define as variáveis de sessão e redireciona para a página apropriada
            $_SESSION['username'] = $nome;
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            switch($nivel){
                case 0:
                    header('Location: ../html-php/noParecerista');
                    break;
                case 1:
                    header('Location: ../html-php/parecerista.php');
                    break;
                case 2:
                    header('Location: ../html-php/admin.php');
                    break;
            }
           } else {
        // Se não houver resultado, redireciona para a página de login novamente
        header('Location: ../html-php/login.php');
    }
    } catch (Exception $e) {
    // Trata as exceções redirecionando para a página de login novamente
    header('Location: ../html-php/login.php');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    }
    } else {
// Se não houver email e senha, redireciona para a página de login novamente
header('Location: ../html-php/login.php');
unset($_SESSION['email']);
unset($_SESSION['senha']);
}
?>