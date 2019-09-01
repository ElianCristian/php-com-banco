<?php

include "../conexao.php";

$sql = mysqli_query($con, "INSERT INTO produto(nome_produto, preco) value ('".$_POST['produto']."', '".$_POST['preco']."')");
header("Location: ../cadastro.php");
