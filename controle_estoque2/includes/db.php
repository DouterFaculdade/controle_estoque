<?php
$servername = "localhost";
$username = "root"; // ou o usuário que você configurou durante a instalação do MySQL
$password = ""; // ou a senha que você configurou durante a instalação do MySQL
$database = "controle_estoque"; // nome do banco de dados que você criou

// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
