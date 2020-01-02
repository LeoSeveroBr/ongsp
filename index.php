<?php
session_start();
//print_r($_SESSION);
//test session variables
//if (!empty($_SESSION) and $_SESSION['id'] == '14') {
// echo	$okiMsg[] = "PHP sessions Ok\n";
//} else {
//echo	$errMsg[] = "Sessaes PHP Nao Funcionam<br>Verifique a instalacao do PHP no seu servidor\n";
//}
//exit();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>OngSP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/navBar.css" media="screen" />
        <!--<link rel="stylesheet" href="css/bulma.min.css" />-->
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
        <script type="text/javascript" src="./jquery/jquery.mask.min.js"></script>  


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
        <!--Cabe&ccedil;alho-->  
        <div class="container-fluid"> 
            <div class="container-fluid" id="navBar">		
                <ul class="nav nav-tabs">
                    <li class="#active#"><a href="index.php">Inicio</a></li>
                    <li><a href="./php/Consulta.php">Consulta</a></li>
                    <li><a href="./php/Cadastro.php">Cadastro</a></li>
                    <li <?php echo (empty($_SESSION['id'])) ? " " : "hidden"; ?>>
                        <button style="padding-top: 10px; text-align: center;" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modalLogin">Login</button>
                    </li>   
                    <li>
                        <a href="php/Deslogar.php"   class="btn btn-danger btn-md">SAIR</a> 
                    </li>   
                </ul>
            </div>
            <!--Modificar e colocar na nav bar  temporario--> 
            <!--corpo -->
            <div class="jumbotron text-center">
                <?php
                if (isset($_SESSION['nao_cadastrado'])) {
                    ?>
                    <div class="alert alert-danger">
                        <h5> Usuario n&atilde;o cadastrado.</h5>                
                    </div>            
                    <?php
                };
                unset($_SESSION['nao_cadastrado']);
                ?>          
                <h2>Site em cosntru&ccedil;&atilde;o para fins educacionais. Duvidas entre em contato : leocsevero@gmail.com</h2>
                <h1>OngSP</h1>
                            <iframe  src="https://www.youtube.com/embed/9bl2ko6rhM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Fa&ccedil;a a diferen&ccedil;a na vida de alguem.</p> 
            </div>            
            <!--PARTE ONDE TERA INFORMA&ccedil;OES BASICA FIM OU MEIO -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>OngSp</h3>
                        <img src="img/logoong.JPG" class="img-rounded" alt="OngSP" width="330" height="220">                        
                        <p>Um projeto que visa facilitar a procura das pessoas por 
                            trabalhos volunt&aacute;rios, como por exemplo, o usu&aacute;rio (pessoa a qual est&aacute; &agrave; 
                            procura de um trabalho volunt&aacute;rio, pesquisa o nosso Aplicativo), a qual ganhou o 
                            nome de ONG SP, nela a pessoa pode se cadastrar, e a partir disso receber 
                            notifica&ccedil;&otilde;es, informando-a sobre as vagas dispon&iacute;veis, conforme seu perfil 
                            cadastrado. </p>
                    </div>
                    <div class="col-md-4">
                        <h3>Volunt&aacute;rios</h3>
                        <img src="img/voluntario.PNG" class="img-rounded" alt="Voluntario" width="330" height="220">
                        <p>Seja um volunt&aacute;rio e fa&ccedil;a a diferen&ccedil;a na vida de algu&eacute;m, desde uma simples visitar ou ministrar aulas para pessoas 
                            que buscam conhecimento e compania.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Ongs</h3>      
                        <img src="img/ong2.jpg" class="img-rounded" alt="Voluntario" width="330" height="220">
                        <p>Disponibilize espa&ccedil;os e oportunidade para que mais pessoas possam participar e interagir assim contagiando novas amizades.</p>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <!--RODAPE COM INFORMA&ccedil;�ES DE CONTATO-->
            <footer class="container-fluid bg-4 text-center">
                <p>Desenvolvido por  &nbsp;<a href="https://www.facebook.com/leonaldo.severo" id="footerNome" class="rodape1">  Leo Severo - Vers&atilde;o 1.0.5</a> </p>
            </footer>

            <!--Modal login-->
            <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="container-fluid">
                            <h3 class="title has-text-grey">Logar no Sistema</h3>
                            <form action="php/Logar.php" method="POST" id="formLogin" name="formLogin">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" >
                                </div>
                                <div class="form-group">
                                    <label for="Senha">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha">
                                </div>
                                <button type="submit" class="btn btn-primary btn-right" value="logar">Entrar</button>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>  
                            <Br>
                            <Br>
                        </div>
                    </div>
                </div>
            </div>

            <!--Botao de ajuda-->
            <div class="container-fluid" style="bottom: 0px; right: 0px; position: fixed; /* se quiser fixo mude absolute para fixed*/z-index: 99999; padding-bottom: 8%; padding-left: 93%"> 

                <a href="http://localhost:3000/s/juli" class="btn btn-primary btn-custom">
                    <!--                <a href="http://localhost:3000/lite/juli/?m=channel-web&v=Fullscreen&options=%7B%22hideWidget%22%3Atrue%2C%22config%22%3A%7B%22enableReset%22%3Atrue%2C%22enableTranscriptDownload%22%3Atrue%7D%7D" class="btn btn-primary btn-custom">-->
                    <span class="glyphicon glyphicon glyphicon-question-sign img-circle text-primary btn-icon"></span>
                    Ajuda
                </a>         
                <!--<Br>-->
            </div>
            <!--FIM Botao de ajuda-->



        </div>
    </body>
</html>