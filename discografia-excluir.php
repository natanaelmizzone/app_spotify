<?php 

$id = $_GET['id'];

include "inc-conexao.php";

$sql = "delete from tb_discografia where id = {$id}";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('Locatiom:discografia-listagem.php');
?>