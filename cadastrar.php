<?php
session_start();
include('conexao.php');
$nome = mysqli_real_escape_string($conexao, trim ($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));



$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);



if($row['total'] ==1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "insert into usuario (usuario, senha, email, nome, data_cadastro) values ('$usuario', '$senha', '$email', '$nome', now())";

if($conexao->query($sql) ===TRUE){
    $_SESSION['status_cadastro'] = true;
}
$conexao->close();
header('Location:cadastro.php');
exit;
?>