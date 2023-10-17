<?php
// enviar_link_redefinicao.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber o e-mail do formulário
    $email = $_POST["email"];

    // Verificar se o e-mail está cadastrado no banco de dados (simulando)
    // Se o e-mail estiver registrado, gerar um token de redefinição

    $token = md5(uniqid(rand(), true));

    // Armazenar o token no banco de dados ou em algum lugar seguro

    // Enviar o e-mail de redefinição
    $reset_link = "http://seusite.com/reset_password_form.php?token=$token";

    $to = $email;
    $subject = "Redefinição de Senha";
    $message = "Clique no link a seguir para redefinir sua senha: $reset_link";
    $headers = "From: admin@seusite.com";

    mail($to, $subject, $message, $headers);

    echo "Um e-mail de redefinição foi enviado para o seu endereço.";
}
?>
