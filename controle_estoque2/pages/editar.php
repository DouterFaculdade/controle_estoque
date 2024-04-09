<?php include '../includes/db.php'; ?>
<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/editar.css">
</head>
<body>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
?>

<form id="editarForm" action="../includes/functions.php" method="post">
    <h2>Editar Produto</h2>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>"><br>
    <label for="quantidade">Quantidade:</label><br>
    <input type="number" id="quantidade" name="quantidade" value="<?php echo $row['quantidade']; ?>"><br><br>
    <button type="submit" name="editar">Salvar Alterações</button>
</form>
<?php
} else {
    echo "Produto não encontrado.";
}
?>

</body>
</html>
