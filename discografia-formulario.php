<!DOCTYPE html>
<html lang="pt-BR">
<?php 
$titulo_da_pagina = "Cadastro de Discografia";
include "inc-cabecalho.php"?>
<body>
<main>
<div class="container">

    <?php include "inc-menu.php"?>

<h1>Cadastro de Discografia</h1>

    <form action="discografia-salvar.php" method="post">

    <label>Artista</label><br>
    <input type="text" name="artista"><br><br>

    <label>Nome do Álbum</label><br>
    <input type="text" name="nome"><br><br>
    
    <label>Ano de Lançamento</label><br>
    <input type="number" name="ano"><br><br>
    
    <label>Tipo</label><br>
        <select type="select" name="tipo">
        <option value="album">Álbum</option>
        <option value="single">Single</option>
    </select><br><br>

    <label>Foto</label><br>
    <input type="text" name="foto"><br><br>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>

</form>
</div>
</main>

    <?php include "inc-rodape.php"?>

</body>
</html>