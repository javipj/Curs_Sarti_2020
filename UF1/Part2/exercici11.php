<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8" />
    		<title>Page Title</title>
    		<link rel="stylesheet" type="text/css" href="ejercicio9-plantilla/css/Ejercicio9.css" />
 	</head>

	<body>
		<div id="cabecera">
			<h1>Titol inicial</h1>
		</div>

		<div id="menu">
			<ul>
  			    <li><a href="exercici11.php">Inici</a></li>

	    		<li><a href="exercici11.php?id=1">Pujar Imatges</a></li>
	    		<li><a href="exercici11.php?id=2">Baixar Imatges</a></li>

    		</ul>
		</div>

		<div id="contingut">
			<p>
			<?
			
			isset($_REQUEST["id"])?$contingut=$_REQUEST["id"]:$contingut=0;

			switch($contingut){
				case 1: include("exemple_upload_fitxers.php");break;
				case 2: include("preparacio_11.php");;break;
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
