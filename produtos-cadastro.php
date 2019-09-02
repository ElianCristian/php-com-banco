<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form method="post" action="funcoes/insere.php">
	Produto: <input type="text" name="produto"/><br>
	Preço: <input type="text" name="preco"/><br>
	<input type="submit" value="Cadastrar"><br><br>
</form>

<form action="produtos-altera.php">
	<input type="submit" value="Editar Produtos">
</form>
<form action="produtos-delete.php">
	<input type="submit" value="Excluir Produtos"><br><br>
</form>
</body>
</html>