<?php
session_start();
include('./Conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../index.php');
    exit();
};

$email = mysqli_real_escape_string($mysqli, $_POST['email']); // Recebe o login
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']); // Recebe a senha

$sql = "SELECT id, nome, email, senha FROM usuario WHERE email = '" . $email . "' AND SENHA = '" . $senha . "'"; // Faz a consulta

$resultado = mysqli_query($mysqli, $sql);
//echo $sql;exit; // exibir query
$row = mysqli_num_rows($resultado);
//echo $row;exit(); // conta as linhas

if (isset($resultado)) {  // Preenche o ID e respectivamente futuras informa��es na Sess�o
    while ($dado = mysqli_fetch_array($resultado)) {
        $id = $dado['id'];
        $nome = $dado['nome'];
//                            echo "Nome : " . $dado['nome'] . "<br>";
//                            echo "Telefone : " . $dado['telefone'] . "<br>";
//                            echo "Endereco : " . $dado['endereco'] . "<br>";
//                            echo "RG : " . $dado['rg'] . "<br>";
//                            echo "CNPJ : " . $dado['cnpj'] . "<br>";
//                            echo "Instituicao : " . $dado['instituicao'] . "<br>";
//                            echo "Descricao : " . $dado['descricao'] . "<br>";
//                            echo "Conhecimento : " . $dado['conhecimento'] . "<br>";
//                            echo "Email : " . $dado['email'] . "<br><hr>";
    }
};

if ($row == 1) {
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
//    $_SESSION['login'] = ;
//    $_SESSION['nome'] = $nome;
    header('location: ../index.php');
    
} else {
    $_SESSION['nao_cadastrado'] = true;
//      header('location: Deslogar.php');
    header('location: ../index.php');
    exit();
}
//$mysqli->close();
?>