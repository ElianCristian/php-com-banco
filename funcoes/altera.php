<?php

include "../conexao.php";

$sql = mysqli_query($con, "UPDATE produto SET nome_produto = '".$_POST['produto']."', preco = '".$_POST['preco']."' where id_produto = '".$_GET['id']."'");
//return die
header("Location: ../aula30-alterar.php");
