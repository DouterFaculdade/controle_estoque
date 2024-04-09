<?php
include '../includes/db.php';
include '../header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="../css/listar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script>
    // Script para lidar com cliques nos botões de editar e excluir
    $(document).ready(function() {
        // Editar produto
        $(".editar").click(function() {
            var produtoID = $(this).data("id");
            // Redirecionar para a página de edição com o ID do produto
            window.location.href = "editar.php?id=" + produtoID;
        });

        // Excluir produto
        $(".excluir").click(function() {
            var produtoID = $(this).data("id");
            // Confirmar exclusão
            if (confirm("Tem certeza que deseja excluir este produto?")) {
                window.location.href = "excluir.php?id=" + produtoID;
            }
        });
    });
    </script>
</head>
<body>

<div class="lista-produtos">
    <h1>Lista de Produtos</h1>
    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "SELECT * FROM produtos";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['nome']}</td>";
                echo "<td>{$row['quantidade']}</td>";
                echo "<td>";
                echo "<button class='editar' data-id='{$row['id']}'>Editar</button>";
                echo "<button class='excluir' data-id='{$row['id']}'>Excluir</button>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum produto encontrado.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
