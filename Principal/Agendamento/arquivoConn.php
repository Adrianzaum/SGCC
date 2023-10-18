<?php

// Informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katiaecarolcostura_db";

// Criar uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
  die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
