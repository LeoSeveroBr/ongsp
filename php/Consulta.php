<?php
session_start();
include('Conexao.php');
$sql = mysqli_query($mysqli, "SELECT * FROM usuario") or die(mysqli_error($mysqli));
?>
<div class="consulta">
    <div class=" jumbotron text-center" class="form-horizontal">
        <form action="php/Consulta.php" method="GET">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="Consulta" style="margin-top: 25px;">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col">ENDEREÇO</th>
                            <th scope="col">INSTITUICÃO</th>
                            <th scope="col">DESCRICÂO</th>
                            <th scope="col">CONHECIMENTO</th>
                            <th scope="col">EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($sql)) {
                            while ($dado = mysqli_fetch_assoc($sql)) {
                                echo " <tr><td>" . $dado['nome'] . "</td>";
                                echo "<td>" . $dado['telefone'] . "</td>";
                                echo "<td>" . $dado['endereco'] . "</td>";
                                echo "<td>" . $dado['instituicao'] . "</td>";
                                echo "<td>" . $dado['descricao'] . "</td>";
                                echo "<td>" . $dado['conhecimento'] . "</td>";
                                echo "<td>" . $dado['email'] . "</td>  </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>