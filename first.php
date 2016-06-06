<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="utplassering.css"/>
		<href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body>	
	
		<div class="dropdown">
			<button onclick="dropFunction()" class="dropbtn">Navigation</button>
				<div id="myDropdown" class="dropdown-content">
					<a href="HTML test.php">Innledning og PCer</a> 
					<a href="#Bilder">Hvem er vi?</a>
					<a href="#Kontakt">Kontakt oss</a>
					<a href="#Sider">Interessante sider</a>
					<a href="utplassering.html">Min utplassering</a>
					<a href="first.php">PHP test</a>
				</div>
		</div><br><br><br><br>
	
		<div>
			<?php
			class Car {
				function Car() {
					$this->model = "VW";
				}
			}
			// create an object
			$herbie = new Car();

			// show object properties
			echo $herbie->model;
			?>
		</div>
	</body>
</html>