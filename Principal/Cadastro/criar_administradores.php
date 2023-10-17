
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../Cadastro/conexaobd.php");

// Insere o primeiro administrador
$sql1 = "INSERT INTO usuarios (username, email, password, tipo) VALUES ('Nome do Administrador 1', 'adriandalpont@gmail.com', 'senha_admin1', 'admin')";
mysqli_query($conexao, $sql1);

// Insere o segundo administrador
$sql2 = "INSERT INTO usuarios (username, email, password, tipo) VALUES ('Nome do Administrador 2', 'm1gu3ldalpont@gmail.com', 'senha_admin2', 'admin')";
mysqli_query($conexao, $sql2);

mysqli_close($conexao);
?>
