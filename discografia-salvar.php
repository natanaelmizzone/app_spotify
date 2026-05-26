<?php
/*discografia-salvar.php*/
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

echo "$artista - $nome - $ano - $tipo - $foto";


#abrir conexão

include "inc-conexao.php";

# inserir os dados

$sql = "insert into tb_discografia(artista, nome, ano, tipo, foto) values('$artista', '$nome', $ano, '$tipo', '$foto')";

$resultado = mysqli_query($conexao , $sql);

if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}

# fechar conexao

mysqli_close($conexao);




?>