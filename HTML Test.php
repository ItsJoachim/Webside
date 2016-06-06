<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="script.js" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	</head>

	<body>	
		<div class="logo">
			<img src="bilder/logo.jpg" alt="Data og Elektronikk">
		</div>  

<!--Dropdown knappen-->		
	<div class="dropdown">
		<button onclick="dropFunction()" class="dropbtn">Navigation</button>
			<div id="myDropdown" class="dropdown-content">
				<a href="#Om">Om 2DAEA</a> 
				<a href="#Bilder">Hvem er vi?</a>
				<a href="#Kontakt">Kontakt oss</a>
				<a href="#Sider">Interessante sider</a>
				<a href="utplassering.html">Min utplassering</a>
				<a href="first.php">PHP test</a>
			</div>
	</div><br><br><br><br>
	
<!-- innledning -->
		<h1 id="Om" class="one">2DAEA</h1>
			
		<p id="demo">Samfunnet er i stadig høyere grad blitt avhengig av en rekke data- og elektronikksystemer og elektronisk infrastruktur. 
			Data og elektronikk skal medvirke til å dekke samfunnets behov for kompetanse i alt fra enkelt brukerutstyr som PC og mobiltelefon til avanserte kommunikasjons- og navigasjonssystemer. 
			For at systemer og infrastruktur skal være velfungerende og stabile, er det viktig at installasjon og vedlikehold blir utført av kvalifiserte fagfolk. Og det finner du på <a href="https://elvebakken.vgs.no/">Elvebakken</a>
		</p>
			
		<button onclick="FunctionOne();"> White Text </button> <br> <br>
			
		<div>
			<iframe class="daea" width="80%" height="450px" src="https://elvebakken.vgs.no/fagtilbud/yrkesfag/data-elektronikk-vg2/" name="iframe_a"></iframe>
		</div>
			
		<h3> Dette er nettsiden til elvebakken dataelektronikk. </h3>
			
		<p id="testmus" onmouseover="FunctionTwo();"; onmouseout="FunctionThree();" title="Personlige egenskaper">Som dataelektroniker må du interessere deg for teknologi og utviklingen av denne. 
			Du må arbeide effektivt, ha høyt fokus på sikkerhet, og være flink til å se løsninger på problemer. Videre må du kunne kommunisere og yte service.</p> <br>
		
		<!--Bilder-->
		<h1 id="Bilder" class="two">Hvem er vi?</h1> <br>
		
		<div class="daniel">
			<img src="bilder/daniel.jpg" alt="daniel">
			<p style="text-align:center;"> Dette er Daniel! Han er nordlending, og er eldst på bildet!</p>
		</div>

		<div class="joachim">
			<img src="bilder/joachim.jpg" alt="joachim">
			<p style="text-align:center;"> Dette er Joachim! Han mekket nettsiden!! :O</p>
		</div>
	
		<div class="joacim">
			<img src="bilder/joacim.jpg" alt="joacim">
			<p style="text-align:center;"> Dette er Joacim! Han har egentlig skjegg!</p>
		</div>

		<div class="adrian">
			<img src="bilder/adrian.jpg" alt="adrian">
			<p style="text-align:center;"> Adrian er en del av teamet! Han er god på ski!</p>
		</div>

<!--tabellen-->		
		<table id="t01"> 
			<div id="Kontakt" style="height:100%;width:50%">
		
				<caption><br> Kontakt oss: </caption>
			 
				<tr>
					<th>Fornavn</th>
					<th>Etternavn</th>
					<th>E-mail</th>
				</tr>
			
				<tr>
					<td>
						<a href="https://www.facebook.com/joachime.asperud?fref=ts">
								Joachim
						</a>
					</td>
					
					<td>Asperud</td>
					
					<td>joache1510@gmail.com</td>
				</tr>
			
				<tr>
					<td>
						<a href="https://www.facebook.com/daniel.tollefsen.96?fref=ts">Daniel</a>
					</td>
					
					<td>Arntsen</td>
					
					<td>daara011@gmail.com</td>
				</tr>
			
				<tr>
					<td>
						<a href="https://www.facebook.com/kiragutt?fref=ts"> 
							Joacim
						</a>
					</td>
					
					<td>Sørlle</td>
					
					<td>joacim0411@gmail.com</td>
				</tr>
			
				<tr>
					<td>Adrian</td>
					
					<td>Sandnes</td>
					
					<td>adrian2312e@gmail.com</td>
				</tr>
			</table> <br>
		</div>
		
		<br>
<!--Bilen--->
		<marquee behavior ="alternate" direction="right" scrollamount="5"> <img id="myImage" onclick="changeImage()" src="bilder/HvitBil.jpg" width="500" height="250"> </marquee>
		
		<p class="two">Klikk på bilen for å endre farge!</p><br>

<!--Kalkulatorene-->		
		<div class="kalkis">	
			<p>Skriv inn to tall og klikk på knappen så vil de bli lagt sammen</p>
			
			<br><button onclick="McErn()">Legg sammen</Button><br><br>
			
				Skriv inn pris nummer en:
			<input type="numb" id="numb1" name "number1">
				Skriv inn pris nummer to:
			<input type="numb" id="numb2" name "number2">
			<p id="kalk"></p>
		</div><br>
		
	<div class="kalkisTo">	
		<p>Skriv inn to tall og klikk på en av knappene!</p>
	
	<div>
		<button class="kalkKnapp" onclick="Plus()">+</Button>
		<button class="kalkKnapp" onclick="Minus()">-</Button>
		<button class="kalkKnapp" onclick="Gange()">*</Button>
		<button class="kalkKnapp" onclick="Dele()">/</Button><br><br>
	</div><br>
				Skriv inn tall nummer en:
			<input type="numb" id="numb3" name="number3">
				Skriv inn tall nummer to:
			<input type="numb" id="numb4" name="number4">
		<p id="kalkTo"></p>
		</div><br><br>
		
<!--Nettsidene -->		
		<h1  id="Sider" class="sider">Interessante sider!<h1><br>
		<div>
			<iframe class="yr" width="80%" height="450px" src="http://www.yr.no/" name="yr"></iframe>
			<iframe class="itavisen" width="80%" height="450px" src="http://www.itavisen.no/" name="itavisen"></iframe>
		</div>
		<div>
			<iframe class="vg" width="80%" height="450px" src="http://www.vg.no/" name="vg"></iframe>
	    </div>
	</body>
</html>