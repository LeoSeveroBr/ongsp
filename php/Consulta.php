<?php
session_start();
//print_r($_SESSION);
include('./conexao.php');

//$expression = $_POST['consulta']);
if (isset($_POST['consulta'])) {
    $expression = $_POST['consulta'];
////    echo $_POST['consulta'];
//   // echo $pesquisa;
    $consulta = "SELECT id, nome, telefone, endereco, rg, cnpj, instituicao, descricao, conhecimento, email FROM usuario WHERE nome LIKE '%" . $expression . "%'";
//    print_r($consulta);
    $con = $mysqli->query($consulta) or die($mysqli->error);
} else {
    $expression = "Sem Dados";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>OngSP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/navBar.css" media="screen" />
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
        <!--CDF -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
        
        <style>
           /*Stylo do botao ajuda no canto da tela*/
           .btn-custom {
               padding: 1px 15px 3px 2px;
               border-radius: 50px;
           }

           .btn-icon {
               padding: 8px;
               background: #ffffff;
           }
        </style>
    </head>
    <body>
        <div class="container-fluid" id="navBar">		
            <ul class="nav nav-tabs">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="Consulta.php">Consulta</a></li>
                <li><a href="Cadastro.php">Cadastro</a></li>
                <li>
                    <a href="Deslogar.php"   class="btn btn-danger btn-md">SAIR</a> 
                </li>   
            </ul>                
        </div>
        <div class="container-fluid">
            <div class="jumbotron text-center" class="form-horizontal" >
                <form action="Consulta.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="consulta">Consulta Nome/Ong:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="consulta"  name="consulta" placeholder="Digite um nome.">
                        </div>
                        <br>
                        <div class="col-sm-02" style="padding-top: 25px;">
                            <!--<input type="text" class="form-control" id="consulta" placeholder="Digite um nome.">-->
                            <button class="btn btn-primary " type="submit" name="pesquisar" id="pesquisar" value="Enviar">Pesquisar</button>
                        </div>
                    </div>
                </form>
                <i>                    
                    <?php
                    if (isset($con)) {
                        while ($dado = mysqli_fetch_array($con)) {
//                        while ($dado = $con->fetch_array()) {
                            echo "Nome : " . $dado['nome'] . "<br>";
                            echo "Telefone : " . $dado['telefone'] . "<br>";
                            echo "Endereco : " . $dado['endereco'] . "<br>";
                            echo "RG : " . $dado['rg'] . "<br>";
                            echo "CNPJ : " . $dado['cnpj'] . "<br>";
                            echo "Instituicao : " . $dado['instituicao'] . "<br>";
                            echo "Descricao : " . $dado['descricao'] . "<br>";
                            echo "Conhecimento : " . $dado['conhecimento'] . "<br>";
                            echo "Email : " . $dado['email'] . "<br><hr>";
                        }
                    }
                    ?>
                </i>
            </div>
             <!--Botao de ajuda-->
            <div class="container-fluid" style="bottom: 0px; right: 0px; position: fixed; /* se quiser fixo mude absolute para fixed*/z-index: 99999; padding-bottom: 8%; padding-left: 93%"> 

                <a href="http://localhost:3000/lite/juli/?m=channel-web&v=Fullscreen&options=%7B%22hideWidget%22%3Atrue%2C%22config%22%3A%7B%22enableReset%22%3Atrue%2C%22enableTranscriptDownload%22%3Atrue%7D%7D" class="btn btn-primary btn-custom">
                    <span class="glyphicon glyphicon glyphicon-question-sign img-circle text-primary btn-icon"></span>
                    Ajuda
                </a>         
                <!--<Br>-->
            </div>
            <!--FIM Botao de ajuda-->
        </div>
    </body>
</html>