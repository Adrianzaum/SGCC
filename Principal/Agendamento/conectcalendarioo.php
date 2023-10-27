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


if (isset($_POST['enviado'])) {
    // COLETA DE DADOS
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $tempo = $_POST['tempo'];
    $service = $_POST['service'];
    $dataAtual = date("Y-m-d");

    // VERIFICAÇÃO QUANTIDADE DE AGENDAMENTOS DIÁRIOS
    $sqlQuantidade = "SELECT COUNT(*) as total FROM conserto WHERE DATE(data) = ?";
    $stmtQuantidade = $conn->prepare($sqlQuantidade);
    $stmtQuantidade->bind_param("s", $dataAtual);
    $stmtQuantidade->execute();
    $resultQuantidade = $stmtQuantidade->get_result();

    if ($resultQuantidade) {
        $row = $resultQuantidade->fetch_assoc();
        $quantidade = $row['total'];

        if ($quantidade >= 5) {
            echo "<script>Agendamentos máximos atingidos</script>";
            header("location: ./calendario.php");
            exit;
        } else {
            $sqlCadastro = "INSERT INTO conserto (nome, telefone, tempo, service, data) VALUES (?, ?, ?, ?, ?)";
            $stmtCadastro = $conn->prepare($sqlCadastro);
            $stmtCadastro->bind_param("sssss", $nome, $telefone, $tempo, $service, $dataAtual);
            $stmtCadastro->execute();

            header("location: ./calendario.php");
            exit;
        }
    } else {
        echo "Erro: " . $conn->error;
    }
} else {
    echo "Erro!";
}
