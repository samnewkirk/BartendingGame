var guests = document.getElementById("guests").innerHTML = 0;
var tips = document.getElementById("tips").innerHTML = 0;
function count(){
	var x = Math.floor(Math.random() * 5);
	guests += 1
	tips += x
	document.getElementById("guests").innerHTML = guests;
	document.getElementById("tips").innerHTML = tips;
}