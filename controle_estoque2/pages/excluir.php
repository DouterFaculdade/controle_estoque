<?php include '../includes/db.php'; ?>
<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Produto</title>
    <link rel="stylesheet" href="../css/excluir.css">
</head>
<body>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: ../pages/listar.php");
    exit;
} else {
    echo "<div class='mensagem-erro'>Erro ao excluir o produto.</div>";
}
?>

</body>
</html>
