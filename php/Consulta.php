<?php
session_start();
include('Conexao.php');
$sql = mysqli_query($mysqli, "SELECT * FROM usuario") or die(mysqli_error($mysqli) 
);
?>
<div class="consulta">
    <div class=" jumbotron text-center" class="form-horizontal">
        <form action="php/Consulta.php" method="GET">
            <div class="table-responsive">
                <table class="table table-bordered" id="Consulta">
                    <thead>                          
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th>ENDERECO</th>
                    <!--<th>RG</th>-->
                    <!--<th>CNPJ</th>-->
                    <th>INSTITUICAO</th>
                    <th>DESCRICAO</th>
                    <th>CONHECIMENTO</th>
                    <th>EMAIL</th>
                    </thead>
                    <tbody>                        
                        <?php
                        if (isset($sql)) {
                            while ($dado = mysqli_fetch_assoc($sql)) {
                                echo " <tr><td>" . $dado['NOME'] . "</td>";
                                echo "<td>" . $dado['TELEFONE'] . "</td>";
                                echo "<td>" . $dado['ENDERECO'] . "</td>";
//                                echo "<td>" . $dado['RG'] . "</td>";
//                                echo "<td>" . $dado['CNPJ'] . "</td>";
                                echo "<td>" . $dado['INSTITUICAO'] . "</td>";
                                echo "<td>" . $dado['DESCRICAO'] . "</td>";
                                echo "<td>" . $dado['CONHECIMENTO'] . "</td>";
                                echo "<td>" . $dado['EMAIL'] . "</td>  </tr>";
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 3px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#Consulta tr:nth-child(odd) {
            background-color: #fff;
        }
        table#Consulta th {
            background-color: #007bff;
            color: white;
        }
        .consulta{
            background-color: #0069d9;
        }
    </style>
</div>

