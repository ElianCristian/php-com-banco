<?php

include "../conexao.php";

$sql = mysqli_query($con, "DELETE FROM produto where id_produto = '".$_GET['id']."'");
//return die
header("Location: ../produtos-delete.php");
