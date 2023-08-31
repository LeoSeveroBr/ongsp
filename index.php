<?php
session_start();
/* echo "<pre>";
var_dump($_SESSION);
echo "</pre>"; */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OngSP</title>

    <!-- CDN bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link REL="SHORTCUT ICON" HREF="img/logoong.ico"> <!--   Img do icone que aparece na navegacao-->    
    <link rel="stylesheet" type="text/css" href="style.css" />   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="img/logoong.ico" alt="OngSP" width="30" height="24""><span style=" color: black;"> OngSP </span></a>
            <a class=" navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" onclick="MenuPrincipal('consulta')">Consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="MenuPrincipal('cadastro')">Cadastro</a>
                    </li>
                </ul>
                <div class="col-md-3 text-end">
                    <a <?php echo (empty($_SESSION['id'])) ? "" : "hidden"; ?> type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#LoginModal"> Login</a>
                    <a type="button" class="btn btn-outline-light" href="php/Deslogar.php"> Sair </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- corpo do site -->
    <div class="container-fluid" id="conteudo">
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

            <!--  carousel -->

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/111.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Todos podem participar</h3>
                            <p style="font-size: larger;">Seja a mudança na vida das pessoas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/222.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="color: white;">Abraçe as oportunidades</h3>
                            <p style="color: white; font-size: larger;">Um otima chance de colocar em pratica seu
                                conhecimento de alguma maneira.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/333.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="color: white;">Conhecimento deve ser praticado</h3>
                            <p style="color: white; font-size: larger;">A melhor maneira de evoluir e praticar ou
                                compartilhar o que foi aprendido.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <!-- Parte das fotos  -->

            <div class="container text-center" id="FotosBaixo">
                <h3>Um pouco sobre OngSP</h3><br>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="img/ong2.jpg" class="img-responsive" alt="Pessoas" width="330" height="220" alt="Image">
                        <p>Um projeto que visa facilitar a procura das pessoas por
                            trabalhos volunt&aacute;rios, como por exemplo, o usu&aacute;rio (pessoa a qual est&aacute;
                            &agrave;
                            procura de um trabalho volunt&aacute;rio, pesquisa o nosso Aplicativo), a qual ganhou o
                            nome de ONG SP, nela a pessoa pode se cadastrar, e a partir disso receber
                            notifica&ccedil;&otilde;es, informando-a sobre as vagas dispon&iacute;veis, conforme seu perfil
                            cadastrado.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/voluntario.PNG" class="img-responsive" alt="Voluntario" width="330" height="220" alt="Image">
                        <p>Seja um volunt&aacute;rio e fa&ccedil;a a diferen&ccedil;a na vida de algu&eacute;m, desde uma
                            simples visitar ou ministrar aulas para pessoas
                            que buscam conhecimento e compania.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/suporte.PNG" class="img-responsive" alt="Suporte" width="330" height="220" alt="Image">
                        <p>Faça parte dessa familia em busca de auxiliar aqueles que mais precisam.</p>
                    </div>
                </div>
            </div><br>
        </div>
    </div>

    <!-- Login do Modal  -->

    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="container-fluid p-4">
                    <h3 class="title has-text-grey text-center"> Logar no Sistema </h3>
                    <form action="php/Logar.php" method="POST" id="formLogin" name="formLogin">
                        <div class="form-group">
                            <label for="Email"> Email:</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="Senha"> Senha:</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" style="margin: 8px;"> Entrar </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Rodape do site-->
    <footer class="bg-primary text-white ">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6">
                    <h2>Github</h2>
                    <p>Local do repositório :</p>
                    <a href="http://github.com/LeoSeveroBr" class="btn btn-dark btn-lg" target="_blank"> LeoSeveroBr
                    </a>
                </div>
                <div class="col-md-6">
                    <h2>Contato</h2>
                    <p>Entre em contato conosco se tiver alguma dúvida.</p>
                    <a href="" class="text-white">
                        leocsevero@gmail.com
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>&copy; 2023 Direitos autorais por <a class="text-white" href="https://github.com/LeoSeveroBr/">Leo
                    Severo </a> - Vers&atilde;o 1.2.0</p>
        </div>
    </footer>
    <script src="main.js"></script>
    <div style="text-align: center"></div>

</html>


