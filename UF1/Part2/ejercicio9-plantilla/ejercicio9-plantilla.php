<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8" />
    		<title>Page Title</title>
    		<link rel="stylesheet" type="text/css" href="css/Ejercicio9.css" />
 	</head>

	<body>
		<div id="cabecera">
			<h1>Titol inicial</h1>
		</div>

		<div id="menu">
			<ul>
  			    <li><a href="ejercicio9-plantilla.php">Inici</a></li>

	    		<li><a href="ejercicio9-plantilla.php?id=1">Opció 1</a></li>
	    		<li><a href="ejercicio9-plantilla.php?id=2">Opció 2</a></li>
	    		<li><a href="ejercicio9-plantilla.php?id=3">Opció 3</a></li>

    		</ul>
		</div>

		<div id="contingut">
			<p>
			<?
			
			isset($_REQUEST["id"])?$contingut=$_REQUEST["id"]:$contingut=0;

			switch($contingut){
				case 1: include("p1.html");break;
				case 2: include("p2.html");;break;
				case 3: include("p3.html");;break;
				default: echo "pàgina principal";break;
			}




			?>
            </p>
		</div>

		<div id="pie">
			<p>Peu de la pàgina web</p>
		</div>
	</body>
</html>
