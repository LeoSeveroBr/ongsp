<?php
session_start();
include('./Conexao.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$rg = $_POST['RG'];
$cnpj = $_POST['CNPJ'];
$instituicao = $_POST['instituicao'];
$descricao = $_POST['descricao'];
$conhecimento = $_POST['conhecimento'];
$email = $_POST['email'];
$senha = $_POST['password'];
$erro = 0;
$id = " ";
//$id =  mt_rand(5,10000); // aqui gera um numero aleatorio para que seja o ID do novo usario

//$sql = "INSERT INTO usuario VALUES";
//$sql.= "('$id', '$nome', '$telefone', '$endereco', '$rg', '$cnpj', '$instituicao', '$descricao', '$conhecimento', '$email', '$senha')";
$sql = "INSERT INTO usuario ( NOME, TELEFONE, ENDERECO, RG, CNPJ, INSTITUICAO, DESCRICAO, CONHECIMENTO, EMAIL, SENHA)VALUES ";
$sql .= "('$nome', '$telefone', '$endereco', '$rg', '$cnpj', '$instituicao', '$descricao', '$conhecimento', '$email', '$senha')";


if ($mysqli->query($sql) === TRUE) {
    echo "<h2>Usuario Inserido Com Sucesso.</h2>";
    echo "   <script>
            window.setTimeout(function() {
                window.location = '../index.php';
              }, 1500);
            </script>";
} else {
    echo "Erro :" . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();

