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
		$produto = $ln['nome_produto'];
		$preco = $ln['preco'];

		echo $produto." => ".$preco."<br/>";
	}
?>	   

</body>
</html>