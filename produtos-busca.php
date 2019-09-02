<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post" action="produtos-busca.php">
<input type="text" name="id"/><br><br>
<input type="submit" value="Buscar">
</form>

<?php
	
	include "conexao.php";
	
	$sql = mysqli_query($con, "SELECT * FROM produto where id_produto = '".$_POST['id']."'");
	
	while ($ln = mysqli_fetch_array($sql)) {
		
		$produto = $ln['nome_produto'];
		$preco = $ln['preco'];

	}
		if (mysqli_num_rows($sql) == true) {
			echo "<br>".$produto." => ".$preco."<br/>";
		}
		else {
			echo "<br><br>Produto não cadastrado";
		}		
?>
<form action="produtos-cadastro.php">
	<br><input type="submit" value="Ir para Cadastro">
</form>
<form action="produtos-altera.php">
	<input type="submit" value="Editar Produtos">
</form>
<form action="produtos-delete.php">
	<input type="submit" value="Excluir Produtos">
</form>

</body>
</html>