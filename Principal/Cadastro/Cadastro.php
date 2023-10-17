<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro111.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <h1>Registre-se</h1>
    <form method="POST" action="../Cadastro/conectcadastro.php">
        <input type="text" placeholder="Nome" name="username" minlength="5" maxlength="30" required oninvalid="setCustomValidity('Não esqueça desse campo!')" oninput="setCustomValidity('')">
        <input type="email" placeholder="Email" minlength="8" name="email"maxlength="30" required oninvalid="setCustomValidity('Não esqueça desse campo!')" oninput="setCustomValidity('')">
        <input type="password" placeholder="Senha" name="password" minlength="8" maxlength="30" required oninvalid="setCustomValidity('Não esqueça desse campo!')" oninput="setCustomValidity('')">
        <input type="password" placeholder="Confirmar Senha" name="confirm_password" minlength="8" maxlength="30" required oninvalid="setCustomValidity('Não esqueça desse campo!')" oninput="setCustomValidity('')">
    <div class="terms">
        <input type="checkbox" id="checkbox" required>
        <br>
        <label for="checkbox">Eu concordo com os <a href="../Termoeserviços.html" oninvalid="setCustomValidity('Aceite nossos termos!')" oninput="setCustomValidity('')"> Termos e serviços</a></label>
    </div>
    <button type="submit" name="enviar">Registre-se</button>
    </form>
    <div class="member">Já é um membro? <a href="./login.php">Logue Aqui</a></div>
</body>
</html>
