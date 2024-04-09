<?php
include '../header.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    
    <link rel="stylesheet" href="../css/adicionar.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Adicionando jQuery para usar Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#adicionarForm").submit(function(event){
                // Impedir o envio do formulário padrão
                event.preventDefault();
                
                // Obter os dados do formulário
                var nome = $("#nome").val();
                var quantidade = $("#quantidade").val();
                
                // Enviar os dados via Ajax
                $.ajax({
                    type: "POST",
                    url: "../includes/functions.php",
                    data: { nome: nome, quantidade: quantidade, adicionar: true }, // adicionar: true indica que é uma ação de adicionar
                    success: function(response){
                        
                        // Redirecionar para a página listar.php após o sucesso
                        window.location.href = "listar.php";
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div>
        <form id="adicionarForm" method="post" enctype="multipart/form-data">
            <h2>Adicionar Produto</h2>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade">

            <!-- Removido o atributo action e o botão de submit -->
            <button type="submit">Adicionar Produto</button>
        </form>
    </div>
</body>
</html>
