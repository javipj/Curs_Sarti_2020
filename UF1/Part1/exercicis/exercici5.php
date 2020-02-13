<?php

function suma($a,$b){
    return $a+$b;
}

function resta($a,$b){
    return $a-$b;
}

function div($a,$b){
    return $a/$b;
}

function mult($a,$b){
    return $a*$b;
}

function calculos($a,$b,$op){
    $resultat=0;

    switch($op){

        case "+":{ $resultat=suma($a,$b);break;}
        case "-":{ $resultat=resta($a,$b);break;}
        case "/":{ $resultat=div($a,$b);break;}
        case "*":{ $resultat=mult($a,$b);break;}

    }

    return $resultat;

}




echo "<br> La suma de 4 y 5 es ".calculos(4,5,"+");
echo "<br> La resta de 4 y 5 es ".calculos(4,5,"-");
echo "<br> La división de 4 y 5 es ".calculos(4,5,"/");
echo "<br> La multiplicación de 4 y 5 es ".calculos(4,5,"*");