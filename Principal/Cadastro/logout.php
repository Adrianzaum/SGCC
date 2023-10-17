<?php
session_start();

// Destruir a sessão atual
session_destroy();

// Redirecionar para a página de login (ou outra página)
header("Location: ../Cadastro/Login.php");
exit();
?>
