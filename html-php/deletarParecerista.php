<?php 
	$id = $_GET['id'];
	include("../conexao/conexao.php");
	$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$id'");

?>
Dados do Cliente <br />
<?php while($row = mysqli_fetch_array($result)){ ?>

    Nome: <?= $row["nome"]; ?> <br/>
    Email: <?= $row["email"]; ?> <br/>
    Nivel: <?= $row["nivel_admin"]; ?> <br/>
    
<?php } ?>
<br/><br/>
<form name="form" action="../conexao/deleteUser.php" method="post">

<input type="text" value="<?= $id ?>" name="id" /> 

<br/><br/>
Verifique os dados e click no botão deletar para excluir o Cliente do Banco de Dados!

<br/><br/>

<input type="submit" name="envia" value=" DELETAR" > <br />


</form>