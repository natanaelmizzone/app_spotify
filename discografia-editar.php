<?php
$id = $_GET['id'];
include "inc-conexao.php";
$sql = "select * from tb_discografia where id = {$id}";

$resultado = mysqli_query($conexao, $sql);
$nome = $artista = $foto = $tipo = $ano = "";

while($linha = mysqli_fetch_assoc($resultado)){

$nome = $linha['nome'];
$artista = $linha ['artista'];
$foto = $linha['foto'];
$tipo= $linha['tipo'];
$ano = $linha['ano'];
}

$titulo_da_pagina = "Editar disco";
include "inc-cabecalho.php";
?>

<body>
    <?php include "inc-menu.php";?>
    <main class="container">
        <h1>Editar disco <?=$nome?></h1>
        <form method="post" action="discografia-atualizar.php?id=<?=$id?>">
            Artista: <input name="artista" value="<?=$artista?>"><br>
            Nome do álbum: <input name="nome" value="<?=$nome?>"><br>
            Ano: <input type="number" name="ano" value="<?=$ano?>"><br>
            Foto: <input name="foto" value="<?=$foto?>"><br>
            Tipo:
        <select name="tipo">
            <option value=""></option>
            <option value="album" <?php if($tipo == "album"){echo "selected";} ?>>Álbum</option>
            <option value="single" <?php if($tipo == "single"){echo "selected";} ?>>Single</option>

         </select><br>
            <button type="submit">Atualizar disco </button>
        </form>
    </main>
<?php 
mysqli_close($conexao);
include "inc-rodape.php";
?>

