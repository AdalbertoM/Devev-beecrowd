<?php
session_start();
include ('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('index.php');
    exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select * from usuario where email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $usuario;
    header('painel.php');
    exit();
}else{
    $_SESSION['falha_autenticacao'] = true;
    header('index.php');
    exit();
}
