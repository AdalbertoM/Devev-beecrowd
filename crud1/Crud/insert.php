<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include('conexao.php');

$servidor = 'localhost';
$usuario = 'root';
$senha = 'senha';
$banco = 'cadastro';

$conn = mysqli_connect($hostname, $usuario, $senha);

// Verifica se ocorreu algum erro de conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Seleciona o banco de dados desejado
mysqli_select_db($conn, $banco);

// Verificar se os campos obrigatórios estão definidos e não são nulos
if (!isset($_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['dt_nasc'])) {
    $_SESSION['falha_insert'] = true;
    header('Location: cadastro.php');
    exit();
}

// Escapar as entradas do usuário para prevenir injeção de SQL
$usuario = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);
$dt_nasc = mysqli_real_escape_string($mysqli, $_POST['dt_nasc']);

// Verificar se o endereço de email já existe na tabela "usuario"
$query_select = "SELECT * FROM usuario WHERE email = '{$usuario}'";
$result = mysqli_query($mysqli, $query_select);

if (!$result) {
    // Tratar o caso em que a consulta SQL falha
    $_SESSION['falha_insert'] = true;
    $_SESSION['error_message'] = 'Ocorreu um erro ao verificar o endereço de email';
    header('Location: cadastro.php', true, 303);
    exit();
}

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['falha_email'] = true;
    header('Location: cadastro.php', true, 303);
    exit();
}

// Executar a consulta de inserção na tabela "usuario"
$query = "INSERT INTO usuario (ID, email, senha, nome, telefone, dt_nasc) VALUES (NULL, '{$usuario}', '{$senha}', '{$nome}', '{$telefone}', '{$dt_nasc}');";

if (mysqli_query($mysqli, $query)) {
    $_SESSION['sucesso_insert'] = true;
    header('Location: index.php', true, 303);
    exit();
} else {
    // Tratar o caso em que a consulta SQL de inserção falha
    $_SESSION['falha_insert'] = true;
    $_SESSION['error_message'] = 'Ocorreu um erro ao inserir o novo usuário';
    header('Location: cadastro.php', true, 303);
    exit();
}
?>
