<?php
$servidor = "localhost"; // Nome do host do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$dbName = "katiaecarolcostura_db"; // Nome do banco de dados

// Crie uma conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $dbName);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Processar o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Preparar a instrução SQL para inserção de dados
    $sql = "INSERT INTO dados_contato (nome, email, mensagem) VALUES (?, ?, ?)";


    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $nome, $email, $mensagem);

        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir os dados: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da instrução SQL: " . $conn->error;
    }
}

$conn->close();
?>
