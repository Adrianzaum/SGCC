<?php
// Autenticação bem-sucedida
$_SESSION['isLoggedIn'] = true;

session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
    // Usuário está logado, redireciona para a página principal
    header("Location: index.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../Cadastro/Login1]].css">
  <title>Login de Usuário</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="autenticar.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required maxlength="30" name="email" oninvalid="this.setCustomValidity('Não esqueça desse campo!')"   oninput="setCustomValidity('')"/>
                        <label class="floating-label" for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required minlength="8" maxlength="30" name="senha" id="senha" oninvalid="this.setCustomValidity('Não esqueça desse campo!')"   oninput="setCustomValidity('')"/>
                        <label class="floating-label" for="senha">Senha</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox" id="mostrarSenha">Mostrar senha <a class="Esqueceuasenha" href="esqueceu_senha.php">Esqueceu a senha?</a></label>
                    </div>
                    <button type="submit" name="enviar">Conectar-se</button>
                    <div class="register">
                        <p>Não possui conta? <a href="../Cadastro/Cadastro.php">Registre-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </script>

    <script>
    const mostrarSenhaCheckbox = document.querySelector('#mostrarSenha');
    const senhaInput = document.querySelector('#senha');

    mostrarSenhaCheckbox.addEventListener('change', function () {
        if (mostrarSenhaCheckbox.checked) {
            senhaInput.type = 'text';
        } else {
            senhaInput.type = 'password';
        }
    });
</script>
*/ficar levantado o Email/*
<script>
    const inputs = document.querySelectorAll('.inputbox input');

    inputs.forEach(input => {
        input.addEventListener('input', function () {
            const label = this.nextElementSibling;
            if (this.value.trim() !== '') {
                label.classList.add('filled');
            } else {
                label.classList.remove('filled');
            }
        });
    });
</script>

*/ficar levantado a Senha/*
<script>
    const inputs = document.querySelectorAll('.inputbox input');

    inputs.forEach(input => {
        input.addEventListener('input', function () {
            const label = this.nextElementSibling;
            if (this.value.trim() !== '') {
                label.classList.add('filled');
            } else {
                label.classList.remove('filled');
            }
        });
    });
</script>



</body>
</html>
