<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../Agendamento/calendario11A.css">
    <link rel="stylesheet" href="../index2x.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


    <title>Calendário</title>
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
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                        </svg> Home</a></li>
                <date>
                    <li><a href="../Serviços/Serviços.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfOOoYy_MRbbEv-2AuGN7w_e1NCiQPcg3l2g&usqp=CAU" alt="handshake" class="icones" width="25px" height="20px" style="margin-bottom: 2px">
                            Serviços</a></li>
                    <li><a href="../Contato/Contato.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin-bottom: 3px">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> Contato</a></li>
                    <li><a href="../Sobre/Sobre.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" style="margin-bottom: 3px">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg> Sobre</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="left">
            <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">december 2015</div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>Dom</div>
                    <div>Seg</div>
                    <div>Ter</div>
                    <div>Qua</div>
                    <div>Qui</div>
                    <div>Sex</div>
                    <div>Sáb</div>
                </div>
                <div class="days"></div>
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="Mês/Ano" class="date-input" />
                        <button class="goto-btn">Ir</button>
                    </div>
                    <button class="today-btn">Hoje</button>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="today-date">
                <div class="event-day">Ter</div>
                <div class="event-date">12th december 2022</div>
            </div>
            <div class="events"></div>
            <div class="add-event-wrapper">
                <div class="add-event-header">
                    <div class="title servico" id="service-title">Volte para a página "Serviços" para adicionar um outro agendamento</div>
                    <i class="fas fa-times close"></i>
                </div>
                <form id="event-form" method="POST" action="conectcalendarioo.php">
                    <div class="add-event-body">
                        <input type="hidden" name="service" id="hidden-service" value="">
                        <div class="add-event-input"> <input type="text" name="nome" placeholder="Nome" class="event-name" require> </div>
                        <div class="add-event-input"> <input type="text" name="telefone" placeholder="Telefone" class="event-phone" require></div>
                        <div class="add-event-input">
                            <select id="event-time" name="tempo" class="event-time" require>
                                <option value="" disabled selected>Horário:</option>
                                <option id="time-1330" value="13:30" >13:30</option>
                                <option id="time-1430" value="14:30" >14:30</option>
                                <option id="time-1530" value="15:30" >15:30</option>
                                <option id="time-1630" value="16:30" >16:30</option>
                                <option id="time-1730" value="17:30" >17:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="add-event-footer">
                        <button class="add-event-btn" name="enviado" id="add-event-submit">Adicionar Marcação</button>
                    </div>
                </form>
            </div>
        </div>
        <button class="add-event">
            <i class="fas fa-plus"></i>
        </button>
    </div>

    <script src="calendarioLogica0.js"></script>
</body>

</html>