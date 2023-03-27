<?php 
	$id = $_POST['id'];
	
	
	include("conexao.php");
 
$result = mysqli_query($conn, "DELETE FROM usuarios WHERE id='$id'");
echo " CADASTRO EXCLUÍDO COM SUCESSO !!!!!!!!!!";

mysqli_close($conn);
 
?>
<br /> <br />
<a href="../html-php/admin.php"> VOLTAR A PÁGINA PRINCIPAL </a> 	