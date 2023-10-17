<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Verifica se o e-mail existe no banco de dados
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Gera uma nova senha
        $novaSenha = gerarNovaSenha();

        // Atualiza a senha no banco de dados
        $query = "UPDATE usuarios SET senha = '$novaSenha' WHERE email = '$email'";
        $conn->query($query);

        // Envio da nova senha por e-mail (necessário implementar a função de envio de e-mail)

        echo "Uma nova senha foi enviada para o seu e-mail.";
    } else {
        echo "Este e-mail não está cadastrado.";
    }
}

// Função para gerar uma nova senha aleatória
function gerarNovaSenha() {
    $caracteresPermitidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $novaSenha = substr(str_shuffle($caracteresPermitidos), 0, 8);
    return $novaSenha;
}
?>
