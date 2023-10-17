<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TCC Adrian</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="../Principal\index2x.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js%22%3E"></script>

  </head>

  <body class="bodycolor">

    <header> 
<div class="container-logo">
      <div class="logo-imagem">
      <img src="../imagens/Icones/LogoKC.png" width="240" alt="">
      </div>
        <div class="logo-texto"> 
        </div>
      </div>

      <div class="menu">
        <ul>
          <li><a href="../Principal/Index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" style="margin-bottom: 5px">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg> Home</a></li> <date>
          <li><a href="../Principal/Serviços/Serviços.php" ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfOOoYy_MRbbEv-2AuGN7w_e1NCiQPcg3l2g&usqp=CAU" alt="handshake" class="icones" width="25px" height="20px" style="margin-bottom: 2px">
 Serviços</a></li>
          <li><a href="../Principal/Contato/Contato.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin-bottom: 3px">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Contato</a></li>
          <li><a href="../Principal/Sobre/Sobre.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" style="margin-bottom: 3px">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Sobre</a></li>
        </ul>
      </div>

    </header>


<?php
session_start();

if (isset($_SESSION['email'])) {
    // Usuário está logado, exibir botão de deslogar
    echo '<div class="container-fluid">
            <div class="arealogin" style="margin-left: 85%; margin-top: 1%; padding: 1%; justify-content: space-around;">
                <a href="Cadastro/logout.php"><button type="button" class="btn btn-danger" style="width: 70px; border-radius: 5px; ">Sair</button></a>
            </div>
        </div>';
} else {
    // Usuário não está logado, exibir botões de cadastro e login
    echo '<div class="container-fluid">
            <div class="arealogin" style="margin-left: 80%; margin-top: 1%; padding: 1%; justify-content: space-around;">
                <a href="Cadastro/Login.php"><button type="button" class="btn btn-outline-warning">Login</button></a>
                <a href="Cadastro/Cadastro.php"><button type="button" class="btn btn-outline-warning">Cadastre-se</button></a>
            </div>
        </div>';

}
?>

    <!--image slider start-->

    <div class="Carrossel">
    <div class="slider">
      <div class="slides">
        
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <!--radio buttons end-->

        <!--slide images start-->
        <div class="slide first">
          <img src="../imagens/Carrossel/1Carrossel.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../imagens/Carrossel/2Carrossel.png" alt="">
        </div>
        <div class="slide">
          <img src="../imagens/Carrossel/3Carrossel.jpg" alt="">
        </div>
        
        
        <!--slide images end-->


        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <!--automatic navigation end-->
        
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 5000);
    </script>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br> 

  </div>
<!--ÁREA DO FOOTER-->

<footer>
        <div class="container-footer">
            <div class="row-footer">
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Atelier</h4>
                    <ul>
                        <li><a href="Sobre/Sobre.php"> Sobre nós </a></li>
                        <li><a href="Serviços/Serviços.php"> Nossos serviços </a></li>
                        <li><a href="Termoeserviços.html"> política de privacidade </a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <ul>
                        <li><a href="#">Perguntas Frequentes</a></li>
                        <li><a href="#">Transporte</a></li>
                        <li><a href="#">devoluções</a></li>
                        <li><a href="#">Status De Pedido</a></li>
                        <li><a href="#">Opções De Pagamento</a></li>
                    </ul>
                </div>
                <!--end footer col-->
               
                <!-- footer col-->
              
                <div class="footer-col">
                  <h4>Redes Sociais</h4>
                  <div class="medias-socias">
                        <a href="https://www.facebook.com/katiaecarolcosturas?mibextid=ZbWKwL" target="blank"> <i class="fa fa-facebook"></i> </a>
                        <a href="https://www.instagram.com/katiaecarolcosturas/?hl=en" target="blank"> <i class="fa fa-instagram"></i> </a>
                        <a href="https://wa.me/message/PTCPWASKBHOCO1" target="blank"> <i class="fa fa-whatsapp"></i> </a>
                    </div>

                <!--end footer col-->
            </div>
        </div>
  </div> 
    </footer>


</body>
</html>