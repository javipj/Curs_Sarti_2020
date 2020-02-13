<?php


if(isset($_REQUEST['frase'])){

    echo "La frase es: ".$_REQUEST['frase'];

    /*

        - Se recibe una frase
        - Se obtienen las palabras de la frase
        - Para cada par de palabras:
            - check que:
                el último caracter de la 1º palabra coincida con el primer caracter de la 2º palabra 
                los 2 últimos carácteres de la 1º palabra coincidan con los 2 primeros carácteres de la 2º palabra
                Así sucesivamente hasta encontrar una coincidencia 
                Esto lo hace para todas las palabras de la frase
                Si alguno no coincide ---> LA FRASE NO ES ENCADENADA
                Si todas las palabras coinciden --> FRASE ENCADENADA
    */

    $encadenada=true;
    $lafrase=$_REQUEST['frase'];
    $palabras=explode(' ',$lafrase);
    
    echo "<br>";
    print_r($palabras);
    

    for($i=0;$i<count($palabras)-1;$i++){
        $primeraPalabraDelPar=$palabras[$i];
        $segundaPalabraDelPar=$palabras[$i+1];
        if (strlen($primeraPalabraDelPar)<strlen($segundaPalabraDelPar)){
            $long=strlen($primeraPalabraDelPar);
        }else{
            $long=strlen($segundaPalabraDelPar);
        }
        for($j=1;$j<$long+1;$j++){
            $ultimoscaracteres=substr($primeraPalabraDelPar,-$j);
            $primeroscaracteres=substr($segundaPalabraDelPar,0,$j);

            if($ultimoscaracteres!=$primeroscaracteres){
                $encadenada=false;
            }else{
                $encadenada=true;
                break;
            }
            
        }
        if (!$encadenada){
            break;
        }

    }

    if($encadenada){
        echo "<br>La frase está encadenada";
    }else{
        echo "<br>La frase no está encadenada";
    }






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
    <form method="post">
        Dime algo:<input type="text" name="frase"><br>
        <input type="submit" value="Enviar">  
    
    </form>
</body>
</html>


<?php




}


?>
