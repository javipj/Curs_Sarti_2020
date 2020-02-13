<?php


function cargarArray($longitud){
    $numeros=array();

    for($i=0;$i<$longitud;$i++){
            $numeros[]=rand(0,100);
            
    
    }
    return $numeros;
}


$numeros=cargarArray(10);


function suma($numeros){
    $valor=0;

    foreach($numeros as $numero){
        $valor+=$numero;
    }  

    return $valor;
}

function maxim($numeros){
    $max=$numeros[0];

    foreach($numeros as $numero){
            if($numero>$max){
                    $max=$numero;
            }
    }


    return $max;
}


function minim($numeros){
    $min=$numeros[0];
    foreach($numeros as $numero){
            if($numero<$min){
                    $min=$numero;
            }
    }
    return $min;

}



echo "<br>La suma es:".suma($numeros)." comparado con ".array_sum($numeros);;
echo "<br>El máximo es ".maxim($numeros)." comparado con ".max($numeros);
echo "<br>El mínimo es ".minim($numeros)." comparado con ".min($numeros);;


?>