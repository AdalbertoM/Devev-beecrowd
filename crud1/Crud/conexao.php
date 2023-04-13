<?php

$hostname = getenv('localhost');
$banco= getenv('cadastro');
$usuario = getenv('root');
$senha = getenv('senha');

$conn = mysqli_connect($hostname, $usuario, $senha);

// Verifica se ocorreu algum erro de conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Seleciona o banco de dados desejado
mysqli_select_db($conn, $banco);
// Cria a tabela usuário
$sql = "CREATE TABLE usuario (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    telefone VARCHAR(255),
    dt_nasc DATE
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabela criada com sucesso!";
    } else {
        echo "Erro ao criar tabela: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
  