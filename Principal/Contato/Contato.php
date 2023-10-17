<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>TCC Adrian</title>
  <link rel="stylesheet" href="../Contato/contat.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body class="bodycolor">
  <header>
    <div class="container-logo">
      <div class="logo-imagem">
        <img src="../../imagens/Icones/LogoKC.png" width="240" alt="">
      </div>
      <div class="logo-texto">
      </div>
    </div>

    <div class="menu">
      <ul>
        <li><a href="../Index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" style="margin-bottom: 5px">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
        </svg> Home</a></li> <date>
        <li><a href="../Serviços/Serviços.php" ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfOOoYy_MRbbEv-2AuGN7w_e1NCiQPcg3l2g&usqp=CAU" alt="handshake" class="icones" width="25px" height="20px" style="margin-bottom: 2px">
         Serviços</a></li>
        <li><a href="../Contato/Contato.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin-bottom: 3px">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg> Contato</a></li>
        <li><a href="../Sobre/Sobre.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" style="margin-bottom: 3px">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg> Sobre</a></li>
      </ul>
    </div>
  </header>

  <br>
  <br>
  <br>
  <br>

  <div class="contato1">
    <h1>Entre em contato</h1>
    <span class="texto">
      <p>Se você tem alguma dúvida, precisa de mais informações ou gostaria de fazer um pedido, fique à vontade para entrar em contato conosco. Estamos aqui para ajudar!</p>
    </span>
    <br>
    <br>
  </div>
  <div class="contato2">
    <legend>Informações de Contato:</legend>

    <p>Telefone: 48 99958-8428 ou 48 99923-7789</a></p>
    <p>E-mail: <a href="mailto:ENDERECO_DE_EMAIL">katiaecarolcosturas@gmail.com</a></p>
    <form class="contato" method="post" action="processar_formulario.php">
      <fieldset class="identificacaousuario">
        <legend>Formulário para Contato:</legend>
        <p>Nome: <input type="text" size="20" maxlength="30" placeholder="Nome" required name="nome" oninvalid="this.setCustomValidity('Não esqueça desse campo!')" oninput="setCustomValidity('')"/></p>
        <p>E-mail: <input type="email" size="20" maxlength="40" placeholder="Seu e-mail" required name="email" oninvalid="this.setCustomValidity('Não esqueça desse campo!')" oninput="setCustomValidity('')"/></p>

      <fieldset>
        <legend>Mensagem:</legend>
        <textarea cols="45" rows="5" placeholder="Deixe aqui sua mensagem." name="mensagem"></textarea>
      </fieldset>
                      <div class="footer-col">
                        <h4>Redes Sociais</h4>
                  <div class="medias-socias">
                        <a href="https://www.facebook.com/katiaecarolcosturas?mibextid=ZbWKwL" target="blank"> <i class="fa fa-facebook"></i> </a>
                        <a href="https://www.instagram.com/katiaecarolcosturas/?hl=en" target="blank"> <i class="fa fa-instagram"></i> </a>
                        <a href="https://wa.me/message/PTCPWASKBHOCO1" target="blank"> <i class="fa fa-whatsapp"></i> </a>
                    </div>

      <input type="submit" value="ENVIAR"/>
      <input type="submit" value="CANCELAR"/>
    </form>
  </div>

  <div class="contato3">
    <article id="conteudo_loc">
      <h1>Localização</h1>
      <span class="texto">
        <p>Visite-nos, somos costureiras qualificadas para atender os clientes com qualidade de serviço e agilidade.</p>
        <p>Será um prazer recebê-los em nosso endereço!</p>
      </span>

      <div class="bordermap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.854673485163!2d-49.677176784368086!3d-28.932364387404068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952221dc0352ae71%3A0xd15ccaeadfac1b86!2sK%C3%A1tia%20%26%20Carol%20Costuras!5e0!3m2!1spt-PT!2sbr!4v1677698463119!5m2!1spt-PT!2sbr" width="1200" height="600" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </article>
  </div>
</body>
</html>
