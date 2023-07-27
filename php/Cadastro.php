<?php
session_start();
include('Conexao.php');

$Atualiza_Cad = "";
$_SESSION['id'] = "";

if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['password']) && !empty($_SESSION['password'])) {
    $Atualiza_Cad = 1;
    $_SESSION['Tipo_Cadastro'] = 1; // aqui verifca e afirma que ja tem dados e sera uma atualizaçao de dados no validador   
    $email = $_SESSION['email'];
    $senha = $_SESSION['password'];
    $sql = "SELECT * FROM usuario WHERE email LIKE '%" . $email . "%' AND password LIKE '%" . $senha . "%'";
    $con = $mysqli->query($sql) or die($mysqli->error);
    $dados_usuario = mysqli_fetch_assoc($con);
    $_SESSION['id'] = $dados_usuario['id'];
    /*  echo "<pre>";
         var_dump($dados_usuario);
         echo "</pre>";  */
};      
     echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";  

?>
<div id="cadastro">
    <div class="jumbotron text-center" class="form-horizontal">
        <h2> <?php echo ($Atualiza_Cad == 1) ? 'Atualizar' : "Cadastro"; ?></h2>
        <form class="form-horizontal" method="POST" action="php/Validador.php">          
            <input TYPE="hidden" NAME="id" VALUE="<?php $_SESSION['id'] ?>">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">NOME:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php
                      if (!empty($dados_usuario['nome'])) {
                      echo $dados_usuario['nome'];
                      } else {
                       echo "";
                      }
                      ?>" placeholder="Digite o nome completo" maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="telefone">TELEFONE:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php
                      if (!empty($dados_usuario['telefone'])) {
                      echo $dados_usuario['telefone'];
                      } else {
                      echo "";
                      }
                      ?>" placeholder="Digite apenas numeros" maxlength="9" size="9">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="endereco">ENDERE&Ccedil;O:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php
                     if (!empty($dados_usuario['endereco'])) {
                     echo $dados_usuario['endereco'];
                     } else {
                      echo "";
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
                        echo "";
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
                        echo "";
                    }
                    ?>" placeholder="Digite apenas numeros" maxlength="14">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="instituicao">INSTITUI&Ccedil;&Atilde;O:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="instituicao" name="instituicao" value="<?php
                    if (!empty($dados_usuario['instituicao'])) {
                        echo $dados_usuario['instituicao'];
                    } else {
                        echo "";
                    }
                    ?>" placeholder="Nome institui&ccedil;&atilde;o" maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="descricao">DESCRI&Ccedil;&Atilde;O:</label>
                <div class="col-sm-10">
                    <textarea name="descricao" class="form-control" id="descricao" name="descricao" rows="3" maxlength="250"><?php
                    if (!empty($dados_usuario['descricao'])) {
                        echo $dados_usuario['descricao'];
                    } else {
                        echo "";
                    }
                    ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="conhecimento">CONHECIMENTO:</label>
                <div class="col-sm-10">
                    <textarea name="conhecimento" class="form-control" id="conhecimento" name="conhecimento" rows="3" maxlength="250"> <?php
                      if (!empty($dados_usuario['conhecimento'])) {
                       echo $dados_usuario['conhecimento'];
                        } else {
                         echo "";
                         }                                                                                                            ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">EMAIL:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?php
                    if (!empty($dados_usuario['email'])) {
                        echo $dados_usuario['email'];
                    } else {
                        echo "";
                    }
                    ?>" placeholder="OBSERVA&Ccedil;&Atilde;O : servir&aacute; como login" maxlength="100">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">SENHA:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="<?php
                    if (!empty($dados_usuario['password'])) {
                        echo $dados_usuario['password'];
                    } else {
                        echo "";
                    }
                    ?>" maxlength="4" placeholder="Digite uma senha de 4 numeros">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-left">
                    <button type="submit" class="btn btn-primary left" name="enviar">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>