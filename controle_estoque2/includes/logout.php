<?php
// Inicia a sessão
session_start();

// Finaliza a sessão (faz logout)
session_destroy();

// Redireciona para a página de login
header("Location: " . $_SERVER['DOCUMENT_ROOT'] . "../controle_estoque2/login.php");
exit; // Certifique-se de sair após o redirecionamento
?>
