<?php
$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id = $_GET['id'];

$sql = "select * from tb_discografia where id = $id";
$resultado = mysqli_query($conexao, $sql);

$foto = $artista = $nome = $ano = $tipo = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $artista = $linha['artista'];
    $nome = $linha['nome'];
    $foto = $linha['foto'];
    $ano = $linha['ano'];
    $tipo = $linha['tipo'];

}

?>
<body>
    <?php include "inc-menu.php";?>

    <main class="container mt-5 text-center mb-5">

        <h1 class="fw-bold fs-2">Visualizar Discografia</h1>
        <img class="img-fluid w-25 h-25 object-fit-cover rounded" src="<?=$foto; ?>" alt="<?=$nome; ?>"> <br>
    
        Artista: <?=$artista; ?> <br>
        Nome do álbum: <?=$nome; ?><br>
        Ano de lançamento: <?=$ano; ?> <br>
        Tipo: <?=$tipo; ?><br>
        

    </main>

<?php 
mysqli_close($conexao);
include "inc-rodape.php";?>


