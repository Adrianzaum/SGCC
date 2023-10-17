<!-- esqueceu_senha.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../Cadastro/login1222.css">
  <title>Esqueceu a Senha</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="enviar_link_redefinicao.php" method="POST">
                    <h2>Esqueceu a Senha</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required maxlength="30" name="email" />
                        <label for="">Email</label>
                    </div>
                    <button type="submit" name="enviar">Enviar Link de Redefinição</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Resto do código/script -->
</body>
</html>
