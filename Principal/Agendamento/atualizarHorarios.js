$(document).ready(function () {
    function atualizarHorariosAgendados() {
        $.ajax({
            type: "POST",
            url: "atualizarHorarios.php",
            data: { dataAgendamento: dataAtual }, // Usando a variável JavaScript
            success: function (response) {
                var horariosAgendados = JSON.parse(response);
                var select = document.getElementById("event-time");

                select.innerHTML = '<option value="" disabled selected>Horário:</option>';

                var horariosDisponiveis = ["13:30", "14:30", "15:30", "16:30", "17:30"];

                horariosDisponiveis.forEach(function (horario) {
                    if (horariosAgendados.includes(horario)) {
                        var option = document.createElement("option");
                        option.value = horario;
                        option.id = "time-" + horario.replace(":", "");
                        option.textContent = horario;
                        option.disabled = true;
                        select.appendChild(option);
                    } else {
                        var option = document.createElement("option");
                        option.value = horario;
                        option.id = "time-" + horario.replace(":", "");
                        option.textContent = horario;
                        select.appendChild(option);
                    }
                });
            }
        });
    }

    atualizarHorariosAgendados();
});