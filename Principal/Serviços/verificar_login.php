<?php
session_start();

// Função para verificar se o usuário está logado
function verificarLogin() {
  // Verifica se o usuário está logado
  $estaLogado = isset($_SESSION['email']);

  if (!$estaLogado) {
    // Usuário não está logado, exibe um alerta e redireciona para a página de login
    echo '<script>alert("Por favor, faça login para acessar este recurso."); window.location.href = "../Cadastro/Login.php";</script>';
    exit; // Encerra a execução do código após o redirecionamento
  }
}

// Verificar o login em todas as páginas de serviço
verificarLogin();
?>
