<?php
require_once("funcions.php");
/*

- Aprovecharemos que tenemos funciones definidas para hacer una
calculadora que haga la suma de dos valores
- Formulario con dos campos de texto.
- 1 botón de envío de datos

*/
if(isset($_REQUEST["submit"])){

    echo suma($_REQUEST["v1"],$_REQUEST["v2"]);
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
        N1:<input type="number" name="v1" id=""><br>
        N2:<input type="number" name="v2" id=""><br>
        <input type="submit" name="submit" value="Enviar">

    
    </form>
</body>
</html>

<?php

}

?>