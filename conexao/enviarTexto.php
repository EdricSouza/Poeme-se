<?PHP
session_start();
include('conexao.php');

$texto = $_POST['texto'];
$name = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

if(!empty($_POST['texto'])&&!empty($_POST['nome'])&&!empty($_POST['email'])&&!empty($_POST['cpf'])){
    $result_text = "INSERT INTO textos (texto, nome, email, cpf) VALUES ('$texto', '$name', '$email', '$cpf')";
    $resultado_text = mysqli_query($conn, $result_text);
} 
if (mysqli_affected_rows($conn)) {
    header("Location: envio.html");
    $_SESSION['msg'] = "Texto enviado";
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    aparece
</body>
</html>