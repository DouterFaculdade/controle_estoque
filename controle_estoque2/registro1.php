<?php
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>


<form action="includes/registro.php" method="post">
    <h2>Registro de Usuário</h2>
    <label for="username">Usuário:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Senha:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit" name="register">Registrar</button>
</form>

</body>
</html>
