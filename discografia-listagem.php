<?php
$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";

?>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de Discografias</h1>
        <div class="row">
            <div class="col">
                <a href="discografia-formulario.php">Nova Discografia</a>   
            </div>
        </div>

        <div class="row">
             <div class="col">
               <table>
                <tr>   
                    <td>ID</id>
                    <td>Artista</td>
                    <td>Nome do álbum</td>
                    <td>Ano</td>
                    <td>tipo</td>
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
                    echo "<td> {$linha_resultado['nome']} </td>";
                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['tipo']} </td>";
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