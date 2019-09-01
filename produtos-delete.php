<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	include "conexao.php";
	$sql = mysqli_query($con, "SELECT * FROM produto");
	while ($ln = mysqli_fetch_array($sql)) {
		$id = $ln['id_produto'];
	?>

	<?=$ln['nome_produto']?> - <a href="funcoes/deleta.php?id=<?=$id?>">Deletar</a><br>

	<?php	
	}// somente aqui fecha o loop
	?>


<form action="produtos-cadastro.php">
	<br><br><input type="submit" value="Ir para Cadastro"><br><br>
</form>
<form action="produtos-altera.php">
	<br><br><input type="submit" value="Editar Produtos"><br><br>
</form>

</body>
</html>