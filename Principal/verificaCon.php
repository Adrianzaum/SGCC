<?php

$servidor = "localhost"; // Nome do host do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$dbName = "katiaecarolcostura_db"; // Nome do banco de dados

// Crie uma conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $dbName);

function verificaCon($conn)
{
  session_start();
  $loged = $_SESSION['logado'] ?? false;
  $email = $_SESSION['email'] ?? false;
  $senha = $_SESSION['senha'] ?? false;

  if (!$loged) {
    header("Location: /TCC/Principal/Cadastro/Login.php");
    exit();
  }

  // CONSULTA DOS DADOS DO USUÁRIO

  $sqlBuscaDados = "SELECT * FROM usuarios WHERE email='$email' AND password = '$senha'";
  $resultBuscaDados = $conn->query($sqlBuscaDados);

  if (!$resultBuscaDados) {
    die('Erro na consulta: ' . mysqli_error($conn));
  }

  $row_dados = mysqli_num_rows($resultBuscaDados);

  while ($data_user = mysqli_fetch_assoc($resultBuscaDados)) {
    $idUsuario = $data_user["id"];
    $tipoUsuario = $data_user["tipo"];
  }

  if ($tipoUsuario == "admin") {
    $tipoUsuario = "admin";
  } else {
    $tipoUsuario = "cliente";
  }

  if ($row_dados == 1) {
    $_SESSION['logado'] = true;
    $_SESSION['idUsuario'] = $idUsuario;
    $_SESSION['tipoUsuario'] = $tipoUsuario;
  }
}
