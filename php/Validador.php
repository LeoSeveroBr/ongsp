<?php
session_start();
 include('./Conexao.php'); 

$erro = 0; 
$Val_Email = $_POST['email'];
$id = $_SESSION['id'];

 if ($_SESSION['Tipo_Cadastro'] == 1) {
     $id = $_SESSION['id'];
 }else{
      $_SESSION['Tipo_Cadastro'] = 0;
      $id = "";
 } 

if (!isset($_POST) || empty($_POST)) {
    $erro = 'Nada foi postado.';
}
if (($_POST['nome']) != '') {
    $nome = $_POST['nome'];
} else {
    $erro = ' Digite um nome !';
}
if (strlen($_POST['telefone']) < 7 || strlen($_POST['telefone']) > 9) {
    $erro = ' Digite um telefone valido !';
} else {
    $telefone = $_POST['telefone'];
}
if (($_POST['endereco']) != '') {
    $endereco = $_POST['endereco'];
} else {
    $erro = ' Digite um endereço !';
}
if (($_POST['RG']) == '' || strlen($_POST['RG']) < 9 || strlen($_POST['RG']) > 11) {
    $erro = ' Digite um rg valido !';
} else {
    $rg = $_POST['RG'];
}
if (($_POST['CNPJ']) == ' ' || strlen($_POST['CNPJ']) < 12 || strlen($_POST['CNPJ']) > 15) {
    $erro = ' Digite um cnpj valido !';
} else {
    $cnpj = $_POST['CNPJ'];
}
if (($_POST['instituicao']) != '') {
    $instituicao = $_POST['instituicao'];
} else {
    $erro = ' Digite uma instituição !';
}
if (($_POST['descricao']) != '') {
    $descricao = $_POST['descricao'];
} else {
    $erro = ' Digite uma instituição !';
}
if (($_POST['conhecimento']) != '') {
    $conhecimento = $_POST['conhecimento'];
} else {
    $erro = ' Digite uma instituição !';
}
if (($_POST['password']) != '') {
    $senha = $_POST['password'];
} else {
    $erro = ' Digite uma senha !';
}
if ((!isset($Val_Email) || !filter_var($Val_Email, FILTER_VALIDATE_EMAIL) ) && !$erro) {
    $erro = 'Envie um email válido.';
} else {
    $email = $Val_Email;
}



// Se existir algum erro, mostra o erro se nao vai salvar
if ($erro) {
    echo '<div style="text-align: center; padding-top: 100px;"> <h1> Não efetuado</h1> Necessario :'.$erro;
    echo'      
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
    if ($_SESSION['Tipo_Cadastro'] == 1) { // Alterar dados vai pra essa parte
        $sql = "UPDATE usuario SET NOME= '" . $nome . "',TELEFONE='" . $telefone . "',ENDERECO='" . $endereco . "',RG='" . $rg . "',CNPJ='" . $cnpj . "',INSTITUICAO='" . $instituicao . "',DESCRICAO='" . $descricao . "',CONHECIMENTO='" . $conhecimento . "',EMAIL='" . $email . "',PASSWORD='" . $senha . "' WHERE id = " . $id;
        if ($mysqli->query($sql) === TRUE) {
            echo "<h2>Dados Atualizado Com Sucesso.</h2>";
            echo "   <script>
            window.setTimeout(function() {
                window.location = '../index.php';
              }, 1500);
            </script>";
        } else {
            echo "Erro :" . $sql . "<br>" . $mysqli->error;
        }
        $mysqli->close();
    } else {     // Primeiro cadastro vai pra esta parte    
        $sql = "INSERT INTO usuario ( NOME, TELEFONE, ENDERECO, RG, CNPJ, INSTITUICAO, DESCRICAO, CONHECIMENTO, EMAIL, PASSWORD )VALUES ";
        $sql .= "('$nome', '$telefone', '$endereco', '$rg', '$cnpj', '$instituicao', '$descricao', '$conhecimento', '$email', '$senha')";

        if ($mysqli->query($sql) === TRUE) {
            echo "<h2>Usuario Inserido Com Sucesso.</h2>";
            echo "   <script>
            window.setTimeout(function() {
                window.location = '../index.php';
              }, 1500);
            </script>";
        } else {
            echo "<h1>Erro</h1> :" . $sql . "<br>" . $mysqli->error;
        }
        $mysqli->close();
    }
}