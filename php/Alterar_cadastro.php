<?php
session_start();
include('./Conexao.php');

$id = $_SESSION['id']; // Pega o ID da sessao
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

$sql = "UPDATE usuario SET NOME= '" . $nome . "',TELEFONE='" . $telefone . "',ENDERECO='" . $endereco . "',RG='" . $rg . "',CNPJ='" . $cnpj . "',INSTITUICAO='" . $instituicao . "',DESCRICAO='" . $descricao . "',CONHECIMENTO='" . $conhecimento . "',EMAIL='" . $email . "',SENHA='" . $senha . "' WHERE id = " . $id;
//print_r($sql);
//exit();

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

