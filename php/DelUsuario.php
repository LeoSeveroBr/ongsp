<?php
session_start();
include('./Conexao.php');

$erro = 0;
$idusuario = empty($_POST['idusuario']) ? 0 : $_POST['idusuario'];

$id = $_SESSION['id'];

if ($_SESSION['Tipo_Cadastro'] == 1) {
    $id = $_SESSION['id'];
} else {
    $_SESSION['Tipo_Cadastro'] = 0;
    $id = "";
}
// Se existir algum erro, mostra o erro se nao vai salvar
if ($erro) {
    echo '<div style="text-align: center; padding-top: 100px;"> <h1> Não efetuado</h1> Necessario :' . $erro;
    echo '      
    <h2>Ouve erro na  inserção de dados nesta operação dos dados!</h2><br>
    <input type="button" value="Voltar" id="btn" onClick="JavaScript: window.history.back();">
        <style>
        #btn{
         display: inline-block;
          padding: 15px 25px;
          font-size: 24px;
          cursor: pointer;
          text-align: center;
          text-decoration: none;
          outline: none;
          color: #fff;
          background-color: #cf23e4;
          border: none;
          border-radius: 15px;
          box-shadow: 0 9px #999;
        }
        </style> </div>
   ';
} else {
    if ($_SESSION['Tipo_Cadastro'] == 1 && $idusuario != 0) {
        $sql = "DELETE FROM usuario WHERE id = $idusuario";
        if ($mysqli->query($sql) === TRUE) {
            session_destroy();
            echo "<h2>Usuario Excluido Com Sucesso.</h2>";
            echo "<script>
                window.setTimeout(function() {
                    window.location = '../index.php';
                }, 1500); </script>";
        } else {
            echo "Erro :" . $sql . "<br>" . $mysqli->error;
        }
        $mysqli->close();
    }
}
