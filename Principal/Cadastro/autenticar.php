<?php
session_start();

include("../Cadastro/conexaobd.php"); // Inclua o arquivo de conexão com o banco de dados

if(isset($_POST['enviar'])){
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email=? AND password=?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) == 1) {
        // Autenticação bem-sucedida
        $_SESSION['email'] = $email;
        header("Location: ../index.php"); // Redirecionar para a página de serviços após a autenticação
        exit();
    } else {
        // Autenticação falhou
        echo "<script>alert('Usuário ou senha incorretos. Tente novamente.'); window.location.href = 'Login.php';</script>";
    }

    mysqli_close($conexao);
}
?>
