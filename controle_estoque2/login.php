<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<header>
    <h1>Seu Cabeçalho</h1>
    <nav>
        <a href="index.php">Página Inicial</a>
        <a href="../controle_estoque2/pages/adicionar.php">Adicionar</a>
        <a href="../controle_estoque2/pages/listar.php">Lista de Produtos</a>
        <a href="../controle_estoque2/login.php">Logout</a> 
    </nav>
</header>
<body>

<form action="includes/login.php" method="post">
    <h2>Login</h2>
    <label for="username">Usuário:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Senha:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit" name="login">Entrar</button>
</form>

<?php
session_start();
include 'includes/db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['senha'])) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit;
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "<div class='error-message' onclick=\"alert('Usuário não encontrado. Deseja se registrar?'); window.location.href = '../registro1.php';\">Usuário não encontrado. Deseja se registrar? <a href='../registro1.php'>Registrar</a></div>";
    
    }
}
?>

</body>
</html>
