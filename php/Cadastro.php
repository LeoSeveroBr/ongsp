<?php
session_start();
include('./conexao.php');
//print_r($_SESSION);
//exit();
$Atualiza_Cad = "";
$_SESSION['ID'] = " ";
if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['senha']) && !empty($_SESSION['senha'])) {
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $Atualiza_Cad = 1;
//    $id = $_SESSION['id'];
    $sql = "SELECT * FROM usuario WHERE email LIKE '%" . $email . "%' AND SENHA LIKE '%" . $senha . "%'";
//     print_r($sql);
    $con = $mysqli->query($sql) or die($mysqli->error);
    $dados_usuario = mysqli_fetch_assoc($con);
    $_SESSION['ID'] = $dados_usuario['ID'];
//      print_r($dados_usuario);
    $acao = 1;
} else {
    $acao = 2;
//    echo " nao esta logado";
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
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" />     
        <script type="text/javascript" src="../jquery/jquery.mask.min.js"></script>  
        <script type="text/javascript" src="../jquery/jquery-3.4.1.js"></script>  
        <script type="text/javascript" src="../jquery/jquery.mask.js"></script>  
        <script type="text/javascript" src="../jquery/jquery.validate.js"></script>  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script>
//            $(document).ready(function () {
//                 $('#telefone').mask('0000-0000');
//                 $('#RG').mask('00.000.000-00');
//                 $('#CNPJ').mask('00.000.000/0000-00', {reverse: true});
            // alert("jooasdfasd");        

//            });
        </script>  
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
            <div class="jumbotron text-center" class="form-horizontal">
                <h2> <?php echo ($Atualiza_Cad == 1 ) ? 'Atualizar  ' : " "; ?>Cadastro</h2>

                <form class="form-horizontal" method="POST" action="<?php
                if ($acao == 1) {
                    echo 'Alterar_cadastro.php'; // Alterar dados vai pra essa outra pagina
                } else {
                    echo 'Cad_cadastro.php';  // Primeiro cadastro vai pra esta pagina
                };
                ?>">
                    <input TYPE="hidden" NAME="id" VALUE="<?php $_SESSION['ID'] ?>">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">NOME:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome" name="nome" value="<?php
                            if (!empty($dados_usuario['NOME'])) {
                                echo $dados_usuario['NOME'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Digite o nome completo" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefone">TELEFONE:</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php
                            if (!empty($dados_usuario['TELEFONE'])) {
                                echo $dados_usuario['TELEFONE'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Digite apenas numeros" maxlength="9" size="9">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="endereco">ENDERE&Ccedil;O:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="endereco"  name="endereco" value="<?php
                            if (!empty($dados_usuario['ENDERECO'])) {
                                echo $dados_usuario['ENDERECO'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Digite o endere&ccedilo;" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="RG">RG:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="RG" name="RG" value="<?php
                            if (!empty($dados_usuario['RG'])) {
                                echo $dados_usuario['RG'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Digite apenas numeros" maxlength="9" size="9">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CNPJ">CNPJ:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="CNPJ" name="CNPJ" value="<?php
                            if (!empty($dados_usuario['CNPJ'])) {
                                echo $dados_usuario['CNPJ'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Digite apenas numeros" maxlength="14">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="instituicao">INSTITUI&Ccedil;&Atilde;O:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="instituicao" name="instituicao" value="<?php
                            if (!empty($dados_usuario['INSTITUICAO'])) {
                                echo $dados_usuario['INSTITUICAO'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Nome institui&ccedil;&atilde;o" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="descricao">DESCRI&Ccedil;&Atilde;O:</label>
                        <div class="col-sm-10">
                            <textarea name="descricao" class="form-control" id="descricao" name="descricao"    rows="3" maxlength="250" ><?php
                                if (!empty($dados_usuario['DESCRICAO'])) {
                                    echo $dados_usuario['DESCRICAO'];
                                } else {
                                    echo " ";
                                }
                                ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="conhecimento">CONHECIMENTO:</label>
                        <div class="col-sm-10">
                            <textarea name="conhecimento" class="form-control" id="conhecimento"  name="conhecimento"   rows="3" maxlength="250" > <?php
                                if (!empty($dados_usuario['CONHECIMENTO'])) {
                                    echo $dados_usuario['CONHECIMENTO'];
                                } else {
                                    echo " ";
                                }
                                ?></textarea>                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">EMAIL:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email"  name="email" value="<?php
                            if (!empty($dados_usuario['EMAIL'])) {
                                echo $dados_usuario['EMAIL'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="OBSERVA&Ccedil;&Atilde;O : servir&aacute; como login" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="password">SENHA:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" value="<?php
                            if (!empty($dados_usuario['SENHA'])) {
                                echo $dados_usuario['SENHA'];
                            } else {
                                echo " ";
                            }
                            ?>" placeholder="Digite uma senha de 4 numeros" maxlength="4">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 text-left">
                            <button type="submit" class="btn btn-primary left"  name="enviar" >Salvar</button>
                        </div>
                    </div>
                </form>
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
