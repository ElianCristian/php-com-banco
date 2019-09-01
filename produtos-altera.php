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

	<form method="post" action="funcoes/altera.php?id=<?=$id?>">
	Produto: <input type="text" name="produto" value="<?=$ln['nome_produto']?>"/>
	Preço: <input type="text" name="preco" value="<?=$ln['preco']?>"/>
	<input type="submit" value="Alterar"><br>
	</form>

	<?php	
	}// somente aqui fecha o loop
	?>


<form action="produtos-cadastro.php">
	<br><input type="submit" value="Ir para Cadastro">
</form>
<form action="produtos-delete.php">
	<br><br><input type="submit" value="Excluir Produtos"><br><br>
</form>

</body>
</html>