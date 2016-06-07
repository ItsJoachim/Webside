function Plus(){
	var x = document.getElementById("numb1").value;
	var y = document.getElementById("numb2").value;
	var z = Number(x) + Number (y);
		document.getElementById("kalk").innerHTML = z;}
		
function Minus(){
	var x = document.getElementById("numb1").value;
	var y = document.getElementById("numb2").value;
	var z = Number(x) - Number (y);
		document.getElementById("kalk").innerHTML = z;}

function Gange(){
	var x = document.getElementById("numb1").value;
	var y = document.getElementById("numb2").value;
	var z = Number(x) * Number (y);
		document.getElementById("kalk").innerHTML = z;}
		
function Dele(){
	var x = document.getElementById("numb1").value;
	var y = document.getElementById("numb2").value;
	var z = Number(x) / Number (y);
		document.getElementById("kalk").innerHTML = z;}