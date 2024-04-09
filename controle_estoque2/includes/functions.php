<?php
include 'db.php';

if (isset($_POST['adicionar'])) {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $imagem = $_FILES['imagem']['name'];
    $target = "../images/" . basename($imagem);

    $sql = "INSERT INTO produtos (nome, quantidade, imagem) VALUES ('$nome', '$quantidade', '$imagem')";
    mysqli_query($conn, $sql);

    move_uploaded_file($_FILES['imagem']['tmp_name'], $target);

    header("Location: ../pages/listar.php");
    exit;
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome='$nome', quantidade='$quantidade' WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: ../pages/listar.php");
    exit;
}
?>
