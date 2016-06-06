//når man klikker på knappen bytter man mellom å vise og å gjemme dropdown menyen
function dropFunction(){
	document.getElementById("myDropdown").classList.toggle("show");}

// lukker menyen om man trykker utenfor
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function FunctionOne() {
	var x = document.getElementById("demo");
		x.style.fontSize = "20px";
		x.style.color = "white";}
		
function FunctionTwo(){
	var y = document.getElementById("testmus");
		y.style.fontSize = "30px";
		y.style.color = "blue";}
		
function FunctionThree(){
	var y = document.getElementById("testmus");
		y.style.fontSize = "15px";
		y.style.color = "#0d0d0d";}
//skifter fagen på bilen		
function changeImage() {
    var image = document.getElementById('myImage');
		if (image.src.match("bilder/HvitBil")) {
			image.src = "bilder/RødBil.jpg";}
		else {

			image.src = "bilder/HvitBil.jpg";}}

		
function McErn(){
	var x = document.getElementById("numb1").value;
	var y = document.getElementById("numb2").value;
	var z = Number(x) + Number (y);
		document.getElementById("kalk").innerHTML = z;}
		
function Plus(){
	var x = document.getElementById("numb3").value;
	var y = document.getElementById("numb4").value;
	var z = Number(x) + Number (y);
		document.getElementById("kalkTo").innerHTML = z;}
		
function Minus(){
	var x = document.getElementById("numb3").value;
	var y = document.getElementById("numb4").value;
	var z = Number(x) - Number (y);
		document.getElementById("kalkTo").innerHTML = z;}

function Gange(){
	var x = document.getElementById("numb3").value;
	var y = document.getElementById("numb4").value;
	var z = Number(x) * Number (y);
		document.getElementById("kalkTo").innerHTML = z;}
		
function Dele(){
	var x = document.getElementById("numb3").value;
	var y = document.getElementById("numb4").value;
	var z = Number(x) / Number (y);
		document.getElementById("kalkTo").innerHTML = z;}
