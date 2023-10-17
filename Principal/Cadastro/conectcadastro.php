<?php
include("../Cadastro/conexaobd.php");

if(isset($_POST['enviar'])){
    $nome = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $confirmsenha = $_POST['confirm_password'];

    if($senha == $confirmsenha) {
        $senhaconfirmed = $senha;
    }
    else{
        header("Location: Cadastro.php");
        exit();
    }

    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$nome', '$email', '$senhaconfirmed')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: Login.php");
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

}
?>

