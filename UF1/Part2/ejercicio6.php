    <?php

/*Sumatorio de un array 
	- Cargaremos 10 valores mediante un formulario
	- Se guardaran en un array
	- Tendremos que devolver el sumatorio Y el valor máximo y mínimo.
    - Si teníamos una función previa que hacia esto deberemos utilizarla.
*/

if(isset($_REQUEST["submit"])){
    require_once("funcions_suma_min_max.php");
    $numeros=$_REQUEST["valor"];
    echo "<br>El max es "._max($numeros);
    echo "<br>El min es "._min($numeros);
    echo "<br>La suma es "._suma($numeros);


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
        N1:<input type="number" name="valor[]" id=""><br>
        N2:<input type="number" name="valor[]" id=""><br>
        N3:<input type="number" name="valor[]" id=""><br>
        N4:<input type="number" name="valor[]" id=""><br>
        N5:<input type="number" name="valor[]" id=""><br>
        N6:<input type="number" name="valor[]" id=""><br>
        N7:<input type="number" name="valor[]" id=""><br>
        N8:<input type="number" name="valor[]" id=""><br>
        N9:<input type="number" name="valor[]" id=""><br>
        N10:<input type="number" name="valor[]" id=""><br>
        <input type="submit" name="submit" value="Enviar">

    
    </form>
</body>
</html>

<?php

}


?>
