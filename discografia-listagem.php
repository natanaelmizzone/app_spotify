<?php
$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";

?>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de Discografias</h1>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-success me-2" href="discografia-formulario.php">Nova Discografia</a>   
            </div>
        </div>

        <div class="row">
             <div class="col">
               <table class="table table-striped">
                <tr scope="row">   
                    <td scope="col fw-bold">ID</td>
                    <td scope="col fw-bold">Artista</td>
                    <td scope="col fw-bold">Nome do álbum</td>
                    <td scope="col fw-bold">Ano</td>
                    <td scope="col fw-bold">Tipo</td>
                    <td scope="col fw-bold">Ações</td>
                </tr>
                <?php 
                #abrir conexão
                include "inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_discografia order by artista, ano";
                $resultado = mysqli_query($conexao, $sql);

                #listar os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id']} </td>";
                    echo "<td> {$linha_resultado['artista']} </td>";

                    echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td>";

                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['tipo']} </td>";
                    echo "<td> <a href='discografia-excluir.php?id={$linha_resultado['id']}'>Excluir</a> 

                                <a href='discografia-editar.php?id={$linha_resultado['id']}'>Editar</a>
                    </td>";

                    echo "</tr>";
                }

                #fechar conexão
                mysqli_close($conexao);
                ?>
                </table>
                             
            </div>
        </div>
    </main>

<?php include "inc-rodape.php"; ?>