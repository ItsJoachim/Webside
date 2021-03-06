<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="utplassering.css"/>
		<href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>	
		<div class="logo">
			<img src="bilder/kretskort.jpg" alt="Data og Elektronikk">
		</div>  
		
	<div class="dropdown">
		<button onclick="dropFunction()" class="dropbtn">Navigation</button>
			<div id="myDropdown" class="dropdown-content">
				<a href="#innledning">Innledning og PCer</a> 
				<a href="#Bilder">Hvem er vi?</a>
				<a href="#Kontakt">Kontakt oss</a>
				<a href="#Sider">Interessante sider</a>
				<a href="utplassering.html">Min utplassering</a>
				<a href="first.php">PHP test</a>
			</div>
	</div><br><br><br><br>
		
		<h1 id="Innledning" class="one">Rapport om utplasseringen min på Sagene Data</h1>
			
		<p id="demo" class="innledning" > På utplasseringen jobbet jeg for Sagene Data. En vanlig arbeidsdag gikk med på mange forskjellige ting. <br>
				Dagen startet ofte med å ta imot PCer av både ansatte og elever på
				Elvebakken VGs. Her var det mye feilsøking av skolePCer. <br> 
				De PCene vi har mest av på <a href="https://elvebakken.vgs.no/">Elvebakken</a> er fabrikkert av Dell og er av modellen LATITUDE E6330.
		</p>

		<button onclick="fadeIN();">Spesefikasjoner</button> <br> <br>
	
<div class="komponent">	
	<ul id="fade">
		<li>Intel Core i33120M Prosessor (3M Cache, 2,50GHz, 64bit, med Intel HD Graphics4000)</li>
		<li>4GB RAM</li>
		<li>Segate eller Western Digital 320GB HDD (Hard Disk Drive)<br>
		    Harddisk er en komponent som lagrer digital informasjon på raskt roterende disker som er dekket av et magnetisk materiale.
		<br>I motsetning til RAM krever ikke harddisken strøm for å beholde de lagrede filene</li>
		<li>Generic PnP monitor (1366 x 768 pixels (32 bit) (60Hz))<li>
	</ul>  
</div>
			
		<h3> Dette er nettsiden til Sagene Data. </h3>
		
		<div>
			<iframe class="daea" width="80%" height="450px" src="https://sagenedata.no/" name="iframe_a"></iframe>
		</div>
			
			
		<p id="testmus" onmouseover="FunctionTwo();"; onmouseout="FunctionThree();" title="Personlige egenskaper">Som dataelektroniker må du interessere deg for teknologi og utviklingen av denne. 
			Du må arbeide effektivt, ha høyt fokus på sikkerhet, og være flink til å se løsninger på problemer. Videre må du kunne kommunisere og yte service.</p> <br>
		
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
		
		<table id="t01"> <!--tabellen-->
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

		<marquee behavior ="alternate" direction="right" scrollamount="5"> <img id="myImage" onclick="changeImage()" src="bilder/HvitBil.jpg" width="500" height="250"> </marquee>
		
		<p class="two">Klikk på bilen for å endre farge!</p><br>
			
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
		
		<!--
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