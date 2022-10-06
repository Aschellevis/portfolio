//Hier maak ik alle constanten aan die ik ga gebruiken in de code. De constanten zijn gelinkt 
//aan classes.
const timeInput = document.querySelector('.time-input');
const button = document.querySelector('.start-timer');
const countingdownDiv = document.querySelector('.timer');
const daySpan = document.querySelector('.day');
const hourSpan = document.querySelector('.hour');
const minuteSpan = document.querySelector('.minute');
const secondSpan = document.querySelector('.second');
const announcementDiv = document.querySelector('.announcement');
let timer = null;

//Deze code zorgt ervoor dat de knop op mijn HTML-pagina ook daadwerkelijk iets doet.
button.addEventListener('click', () => {
    calculateTime(new Date(timeInput.value));
    ('eventDate', (timeInput.value));
    localStorage.setItem('eventDate', JSON.stringify(timeInput.value));
});

// start();

function start() {
    const eventDate = JSON.parse(localStorage.getItem('eventDate'));
    if (eventDate) {
        calculateTime(new Date(eventDate));
    }
}

//Deze functie berekent hoeveel tijd er nog te gaan is.
function calculateTime(dateEvent) {
    announcementDiv.classList.add("hide");
    clearInterval(timer);
    const dateToday = new Date();
    let timeRemaining = dateEvent - dateToday;
    if (timeRemaining > 0) {
        startCountingdown(timeRemaining);
        countingdownDiv.classList.remove('hide');
    } else {
       // timeHasPassed(timeRemaining < -86400000);
        timeHasPassed(timeRemaining);
    }
}

//In deze code wordt er gekeken wanneer de tijd moet stoppen.
function startCountingdown(timeRemaining) {
    timeRemaining -= 1000;
    timer = setInterval(() => {
        timeRemaining -= 1000;
        if (timeRemaining <= 0) {
            clearInterval(timer);
            timeHasPassed(false)
            return;
        }
        updateScreen(timeRemaining); 
    }, 1000);
}

//In deze functie wordt ervoor gezorgd dat de countdown elke seconde geüpdate.
function updateScreen(timeRemaining) {
    const day = timeRemaining / (3600000 * 24);
    daySpan.textContent = Math.floor(day);
    timeRemaining %= (3600000 * 24);
    const hour = timeRemaining / (3600000);
    hourSpan.textContent = Math.floor(hour);
    timeRemaining %= (3600000);
    const minute = timeRemaining / (60000);
    minuteSpan.textContent = Math.floor(minute);
    timeRemaining %= (60000);
    const second = timeRemaining / (1000);
    secondSpan.textContent = Math.floor(second);
    timeRemaining %= (1000);
}

//In deze functie wordt ervoor gezorgd dat er een stukje tekst komt als de tijd begint te
//lopen en als het event voorbij is.
function timeHasPassed(moreThanADay) {
    if (moreThanADay) {
        announcementDiv.textContent = 'Het event is voorbij.';
    } else {
        announcementDiv.textContent = 'Het event is begonnen!';
    }
    announcementDiv.classList.remove('hide');
    localStorage.removeItem('eventDate');
}