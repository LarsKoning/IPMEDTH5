function displayTime(){
    var dateTime = new Date();
    var uren = dateTime.getHours();
    var minuten = dateTime.getMinutes();

    document.getElementById('uren').innerHTML = uren;
    document.getElementById('minuten').innerHTML = minuten;

    if (uren > 6){
        document.getElementById("figuurdag").src="img/Ochtend.png"
        document.getElementById("tekstdag").innerHTML = "Het is nu Ochtend, volgende pil moet je nemen na 12:00";
        document.getElementById("kopdag").innerHTML = "Ochtend";
    }
    if (uren > 12){
        document.getElementById("figuurdag").src="img/Middag.png"
        document.getElementById("tekstdag").innerHTML = "Het is nu Middag, volgende pil moet je nemen na 18:00";
        document.getElementById("kopdag").innerHTML = "Middag";
    }
    if (uren > 18){
        document.getElementById("figuurdag").src="img/Avond.png"
        document.getElementById("tekstdag").innerHTML = "Het is nu Avond, volgende pil moet je nemen na 6:00";
        document.getElementById("kopdag").innerHTML = "Avond";
    }
}

setInterval(displayTime, 10);