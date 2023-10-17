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

if(isset($_POST['enviado'])){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $tempo = $_POST['tempo'];
    $service = $_POST['service'];
    
    $sqlCadastro = "INSERT INTO conserto (nome, telefone, tempo, service)
    VALUES ('$nome', '$telefone', '$tempo', '$service')";

    $resultCadastro = $conn->query($sqlCadastro);

    header("location: ./calendario.php");
}else {
    echo "Erro!";
}
?>
