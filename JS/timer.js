function startTimer(){
    var counter = 30;
    setInterval(function () {
    	counter--;
    	if(counter >= 0){
    		id = document.getElementById("time");
    		id.innerHTML = counter;
    	}
    	if(counter === 0){
    		id.innerHTML = "Timer";
    	}
    }, 1000);
}

/*function start() {
    var timer = 30;
    var minutes, seconds;
    var display = document.querySelector(#timer);
    document.getElementById("timer").innerHTML = display;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}*/

