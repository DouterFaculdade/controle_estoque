<?php
include 'db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash da senha para armazenamento seguro
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, senha) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../login.php");
        exit;
    } else {
        echo "Erro ao registrar usuário: " . mysqli_error($conn);
    }
}
?>
