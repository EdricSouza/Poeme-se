<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admnistrador</title>
</head>
<body>
<?php

    include("../conexao/conexao.php");
    $result = mysqli_query($conn,"SELECT * FROM usuarios");

?>

<table width="900" border="1">
  <tr>
    <th scope="col">&nbsp; ID</th>
    <th scope="col">&nbsp; Nome</th>
    <th scope="col">&nbsp; Email</th>
    <th scope="col">&nbsp; Permissão</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)){ ?>
  <tr>
    <td>&nbsp; <?= $row["id"]; ?></td>
    <td>&nbsp; <?= $row["nome"]; ?></td>
    <td>&nbsp; <?= $row["email"]; ?></td>
    <td>&nbsp; <?= $row["nivel_admin"]; ?></td>
    <td>&nbsp; 
      <a href="deletarParecerista.php?id= <?= $row["id"]; ?>"> <div > Deletar </div> </a>
    	
    </td>
  </tr>
  <?php } ?>
</body>
</html>