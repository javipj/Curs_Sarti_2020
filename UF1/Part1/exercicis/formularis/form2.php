<?php


if(isset($_REQUEST["nom"])){
    echo "Hola  ".$_REQUEST["nom"]."<br>";

}else{





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

        <form  method="post">

        Nom:<input type="text" name="nom" id="nom"><br>

        Rojo:<input type="checkbox" name="colores[]" value="rojo" id=""><br>
        Verde:<input type="checkbox" name="colores[]" value="verde" id=""><br>
        Amarillo:<input type="checkbox" name="colores[]" value="amarillo" id=""><br>

        <input type="radio" name="color" id="">Azul
        <input type="radio" name="color" id="">Rojo


        <input type="submit" value="enviar" name="enviar">

        </form>

</body>
</html>



<?php
}
?>