<?php
    $servidor = "localhost"; // nome do host do banco de dados
    $usuario = "root"; // nome de usuário do banco de dados
    $senha = ""; // senha do banco de dados
    $dbName = "katiaecarolcostura_db"; // nome do banco de dados

    // Conexão com o banco de dados
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbName);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>

