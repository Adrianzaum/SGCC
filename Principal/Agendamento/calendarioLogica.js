// Seleção de elementos do DOM
const calendar = document.querySelector('.calendar');
const date = document.querySelector('.date');
const daysContainer = document.querySelector('.days');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const todayBtn = document.querySelector('.today-btn');
const gotoBtn = document.querySelector('.goto-btn');
const dateInput = document.querySelector('.date-input');
const eventDay = document.querySelector('.event-day');
const eventDate = document.querySelector('.event-date');
const eventsContainer = document.querySelector('.events');
const addEventBtn = document.querySelector('.add-event');
const addEventWrapper = document.querySelector('.add-event-wrapper');
const addEventCloseBtn = document.querySelector('.close');
const addEventTitle = document.querySelector('.event-name');
const addEventTimeSelect = document.getElementById('event-time');
const eventTimeSpan = document.querySelector('.event-time');
const addEventSubmit = document.getElementById('add-event-submit');
const addEventPhone = document.querySelector('.event-phone');
const addEventService = document.getElementById('service-title');
const eventService = addEventService.textContent;

// Variáveis de data
let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

// Array de nomes dos meses
const months = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro',
];

// Array de eventos
const eventsArr = [];
getEvents();
console.log(eventsArr);

// Inicialização do calendário
function initCalendar() {
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const prevLastDay = new Date(year, month, 0);
    const prevDays = prevLastDay.getDate();
    const lastDate = lastDay.getDate();
    const day = firstDay.getDay();
    const nextDays = 7 - lastDay.getDay() - 1;

    date.innerHTML = months[month] + ' ' + year;

    let days = '';

    for (let x = day; x > 0; x--) {
        days += `<div class="day prev-date disabled">${prevDays - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDate; i++) {
        // Verifica se o evento está presente naquele dia
        let event = false;
        eventsArr.forEach((eventObj) => {
            if (
                eventObj.day === i &&
                eventObj.month === month + 1 &&
                eventObj.year === year
            ) {
                event = true;
            }
        });
        if (
            i === new Date().getDate() &&
            year === new Date().getFullYear() &&
            month === new Date().getMonth()
        ) {
            activeDay = i;
            getActiveDay(i);
            updateEvents(i);
            if (event) {
                days += `<div class="day today active event">${i}</div>`;
            } else {
                days += `<div class="day today active">${i}</div>`;
            }
        } else {
            if (event) {
                days += `<div class="day event">${i}</div>`;
            } else {
                days += `<div class="day">${i}</div>`;
            }
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="day next-date">${j}</div>`;
    }
    daysContainer.innerHTML = days;
    addListener();
}

// Função para ir para o mês anterior
function prevMonth() {
    month--;
    if (month < 0) {
        month = 11;
        year--;
    }
    initCalendar();
}

// Função para ir para o próximo mês
function nextMonth() {
    month++;
    if (month > 11) {
        month = 0;
        year++;
    }
    initCalendar();
}

// Event Listeners para os botões de mês anterior e próximo
prev.addEventListener('click', prevMonth);
next.addEventListener('click', nextMonth);

// Inicialização do calendário
initCalendar();

// Event Listener para os dias do calendário
function addListener() {
    const days = document.querySelectorAll('.day');
    days.forEach((day) => {
        day.addEventListener('click', (e) => {
            const clickedDay = Number(e.target.innerText);

            const clickedDate = new Date(year, month, clickedDay);
            const currentDate = new Date();

            if (clickedDate < currentDate) {
                alert('Impossível agendar em dias anteriores.');
                return;
            }

            getActiveDay(clickedDay); // Passa o valor do dia clicado
            updateEvents(clickedDay); // Passa o valor do dia clicado
            activeDay = clickedDay; // Define o dia ativo como o dia clicado

            //Remove a classe ativa
            days.forEach((day) => {
                day.classList.remove('active');
            });

            // Se clicar na data anterior ou na próxima data, muda para esse mês
            if (e.target.classList.contains('prev-date')) {
                prevMonth();
                //Adiciona classe ativa ao dia clicado após mês ser alterado
                setTimeout(() => {
                    // Adiciona classe ativa onde não há data anterior ou próxima
                    const days = document.querySelectorAll('.day');
                    days.forEach((day) => {
                        if (
                            !day.classList.contains('prev-date') &&
                            day.innerHTML === e.target.innerHTML
                        ) {
                            day.classList.add('active');
                        }
                    });
                }, 100);
            } else if (e.target.classList.contains('next-date')) {
                nextMonth();
                //Adiciona classe ativa ao dia clicado após mês ser alterado
                setTimeout(() => {
                    const days = document.querySelectorAll('.day');
                    days.forEach((day) => {
                        if (
                            !day.classList.contains('next-date') &&
                            day.innerHTML === e.target.innerHTML
                        ) {
                            day.classList.add('active');
                        }
                    });
                }, 100);
            } else {
                e.target.classList.add('active');
            }
        });
    });
}

// Botão "Hoje"
todayBtn.addEventListener('click', () => {
    today = new Date();
    month = today.getMonth();
    year = today.getFullYear();
    initCalendar();
});

// Entrada de data do usuário
dateInput.addEventListener('input', (e) => {
    dateInput.value = dateInput.value.replace(/[^0-9/]/g, '');
    if (dateInput.value.length === 2) {
        dateInput.value += '/';
    }
    if (dateInput.value.length > 7) {
        dateInput.value = dateInput.value.slice(0, 7);
    }
    if (e.inputType === 'deleteContentBackward') {
        if (dateInput.value.length === 3) {
            dateInput.value = dateInput.value.slice(0, 2);
        }
    }

    const dateArr = dateInput.value.split('/');
    if (dateArr.length === 2) {
        const monthInput = parseInt(dateArr[0], 10);
        const yearInput = parseInt(dateArr[1], 10);
        if (
            monthInput >= 1 &&
            monthInput <= 12 &&
            !isNaN(yearInput) &&
            yearInput >= 1900 &&
            yearInput <= 9999
        ) {
            gotoDate();
        }
    }
});

// Botão "Ir para"
gotoBtn.addEventListener('click', gotoDate);

function gotoDate() {
    console.log('here');
    const dateArr = dateInput.value.split('/');
    if (dateArr.length === 2) {
        if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
            month = dateArr[0] - 1;
            year = dateArr[1];
            initCalendar();
            return;
        }
    }
    alert('Data inválida');
}


$(document).ready(function () {
    $('.event-phone').inputmask('(99) 99999-9999');

    $('.event-name').on('input', function () {
        $(this).val(
            $(this)
                .val()
                .replace(/[^A-Za-zÀ-ÿ ]/g, '')
        );
    });

    $('.event-name').inputmask({
        mask: '*{1,60}',
        greedy: false,
        definitions: {
            '*': {
                validator: '[A-Za-zÀ-ÿ ]',
            },
        },
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.replace(/[^A-Za-zÀ-ÿ ]/g, '');
            if (pastedValue.length <= 60) {
                return pastedValue;
            }
            return pastedValue.slice(0, 60);
        },
    });
});

// Função para obter o nome do dia e data do dia ativo
function getActiveDay(date) {
    const day = new Date(year, month, date);
    const dayOfWeek = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
    const dayName = dayOfWeek[day.getDay()];
    eventDay.innerHTML = dayName;
    eventDate.innerHTML = date + ' ' + months[month] + ' ' + year;
}

// Função para atualizar os eventos no dia ativo
function updateEvents(date) {
    // Inicializa uma string vazia para armazenar o HTML dos eventos
    let eventsHTML = '';

    // Itera sobre um array chamado 'eventsArr', que deve conter grupos de eventos
    eventsArr.forEach((eventGroup) => {
        // Verifica se a data passada para a função corresponde à data do grupo de eventos
        if (
            date === eventGroup.day &&
            month + 1 === eventGroup.month &&
            year === eventGroup.year
        ) {
            // Se a data corresponder, itera sobre os eventos dentro desse grupo
            eventGroup.events.forEach((event) => {
                // Constrói o HTML para cada evento e o adiciona à string 'eventsHTML'
                eventsHTML += `
                    <div class="event">
                        <div class="title">
                            <i class="fas fa-circle"></i>
                            <h3 class="event-title">${event.service}</h3>
                        </div>
                        <div class="event-details">
                            <span class="event-name">${event.title}</span>
                        </div>
                        <div class="event-details">
                            <span class="event-time">${event.time}</span>
                        </div>
                    </div>`;
            });
        }
    });

    // Se não houver eventos correspondentes, exibe "Nenhuma anotação" mensagem
    if (eventsHTML === '') {
        eventsHTML = `
            <div class="no-event">
                <h3 class="no-event-message">Nenhuma anotação</h3>
            </div>`;
    }

    eventsContainer.innerHTML = eventsHTML;
    saveEvents();

    const deleteButtons = document.querySelectorAll('.delete-event');
    deleteButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const eventService = button.previousElementSibling.textContent;
            const eventTitle =
                button.parentElement.querySelector('.event-name').textContent;
            const selectedTime =
                button.parentElement.parentElement.querySelector(
                    '.event-time'
                ).textContent;
            deleteEvent(eventService, eventTitle, selectedTime);
        });
    });
}

// Botão "Adicionar Evento"
addEventBtn.addEventListener('click', () => {
    addEventWrapper.classList.toggle('active');
});

// Botão "Fechar"
addEventCloseBtn.addEventListener('click', () => {
    addEventWrapper.classList.remove('active');
});

// Fechar o painel de adicionar evento ao clicar fora dele
document.addEventListener('click', (e) => {
    if (e.target !== addEventBtn && !addEventWrapper.contains(e.target)) {
        addEventWrapper.classList.remove('active');
    }
});

// Função para adicionar novos eventos a eventsArr
addEventSubmit.addEventListener('click', () => {
    // Encontre o objeto de dia existente ou crie um novo
    let eventDayObj = eventsArr.find(
        (event) =>
            event.day === activeDay &&
            event.month === month + 1 &&
            event.year === year
    );

    if (!eventDayObj) {
        eventDayObj = {
            day: activeDay,
            month: month + 1,
            year: year,
            events: [],
        };
        eventsArr.push(eventDayObj);
    }

    // Verifique o limite de eventos antes de adicionar
    if (eventDayObj.events.length >= 5) {
        alert('Limite de eventos atingido para este dia (5 eventos)');
        return;
    } else {
        // Resto do código para adicionar o evento
        const eventTitle = addEventTitle.value; // NOME DO USUÁRIO
        const eventPhoneValue = addEventPhone.value;
        const selectedTimeOption = addEventTimeSelect.options[addEventTimeSelect.selectedIndex]; // ARMAZENA O TEMPO
        const selectedTime = selectedTimeOption.value; // ARMAZENA O TEMPO DEFINITIVO
        const eventServiceSelect = document.getElementById('service-title'); // Elemento que contém o serviço selecionado
        const eventService = eventServiceSelect.textContent; // NOME DO SERVIÇO

        if (
            eventTitle === '' ||
            eventPhoneValue === '' ||
            selectedTime === '' ||
            eventService === ''
        ) {
            alert('Por favor, preencha todos os campos');
            return;
        } 

        const newEvent = {
            title: eventTitle,
            phone: eventPhoneValue,
            time: selectedTime,
            service: eventService,
        };

        eventDayObj.events.push(newEvent);

        updateEvents(activeDay);
        saveEvents();

        const activeDayEl = document.querySelector('.day.active');
        if (!activeDayEl.classList.contains('event')) {
            activeDayEl.classList.add('event');
        }

        // Armazenar um indicador de evento adicionado com sucesso no localStorage
        localStorage.setItem('eventoAdicionado', 'true');
    }
});


// Event Listener para excluir eventos ao clicar neles
eventsContainer.addEventListener('click', (e) => {
    if (e.target.classList.contains('event')) {
        if (confirm('Tem certeza de que deseja excluir este evento?')) {
            const eventTitle =
                e.target.querySelector('.event-title').textContent;
            const eventTime = e.target.querySelector('.event-time').textContent;
            eventsArr.forEach((eventGroup) => {
                if (
                    eventGroup.day === activeDay &&
                    eventGroup.month === month + 1 &&
                    eventGroup.year === year
                ) {
                    eventGroup.events = eventGroup.events.filter(
                        (event) =>
                            event.title !== eventTitle &&
                            event.time !== eventTime
                    );
                    if (eventGroup.events.length === 0) {
                        const activeDayEl =
                            document.querySelector('.day.active');
                        if (activeDayEl.classList.contains('event')) {
                            activeDayEl.classList.remove('event');
                        }
                        eventsArr.splice(eventsArr.indexOf(eventGroup), 1);
                    }
                }
            });
            updateEvents(activeDay);
            saveEvents();
        }
    }
});

// Função para salvar eventos no armazenamento local
function saveEvents() {
    localStorage.setItem('events', JSON.stringify(eventsArr));
}

// Função para obter eventos do armazenamento local
function getEvents() {
    // Verifica se os eventos já estão salvos no armazenamento local e então retorna os eventos, caso contrário, nada
    if (localStorage.getItem('events') === null) {
        return;
    }
    eventsArr.push(...JSON.parse(localStorage.getItem('events')));
}

function convertTime(time) {
    // Formatação de tempo 24 horas
    let timeArr = time.split(':');
    let timeHour = timeArr[0];
    let timeMin = timeArr[1];
    let timeFormat = timeHour >= 12 ? 'PM' : 'AM';
    timeHour = timeHour % 12 || 12;
    time = timeHour + ':' + timeMin + ' ' + timeFormat;
    return time;
}

// Atualização do tempo selecionado
function updateSelectedTime() {
    const eventTimeSelect = document.getElementById('event-time');
    const selectedTime = eventTimeSelect.value;
    addEventTimeSelect.textContent = selectedTime; // Atualize o conteúdo com o horário selecionado
}

const urlParams = new URLSearchParams(window.location.search);
const serviceTitle = urlParams.get('service');
const serviceTitleElement = document.getElementById('service-title');
const hiddenServiceInput = document.getElementById('hidden-service');

if (serviceTitle) {
    serviceTitleElement.textContent = decodeURIComponent(
        serviceTitle.replace(/-/g, ' ')
    );
    hiddenServiceInput.value = decodeURIComponent(
        serviceTitle.replace(/-/g, ' ')
    );
}

document.addEventListener('DOMContentLoaded', function () {
    var addButton = document.querySelector('.add-event');

    if (addButton) {
        // Definir um pequeno atraso antes de clicar no botão
        setTimeout(function () {
            // Aplicar a transformação para dar uma animação suave
            addButton.style.transform = 'scale(1.1)';

            // Simular o clique após um pequeno atraso
            setTimeout(function () {
                addButton.click();
            }, 100); // Tempo de atraso para o clique (300ms neste exemplo)
        }, 200); // Tempo de atraso para a animação (1000ms neste exemplo)
    }
});

// Selecionar o campo de nome usando a ID
const eventNameInput = document.querySelector('.event-name');

eventNameInput.addEventListener('input', function () {
    // Remover caracteres especiais, exceto letras, espaços e acentos/cráses
    this.value = this.value.replace(
        /[^a-zA-Zá-úÁ-Úà-ùÀ-Ùâ-ûÂ-Ûã-õÃ-Õä-üÄ-Ü\s]/g,
        ''
    );

    // Limitar a 50 caracteres
    if (this.value.length > 50) {
        this.value = this.value.substring(0, 50);
    }
});

// Atualizar a lista de eventos e salvar
updateEvents(activeDay);
saveEvents();
