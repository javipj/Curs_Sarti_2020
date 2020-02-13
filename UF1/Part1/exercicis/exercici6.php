<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php


/*

variable amb la cadena que vull analitzar

1) passar string a array  "hola" => [h,o,l,a]
2) array a array de frequüències [h,o,l,a] = > [h->1,o=>1,l=>1,a=>1]
3) recorrer arrfreq buscant "value" max i min
4) recorrer arrfreq comparant "value" amb max i min
    si troba algun max o mínim afegir a llistat de lletras max o min



resultat= lletra que més vegades està i lletra que menys vegades està


*/


function retornaMaxiMin($cadena){

    

    $afreq=array_count_values(str_split(str_replace(" ","", preg_replace( '/[\W]/', '', $cadena))));

    $max=array_values($afreq)[0];
    $min=array_values($afreq)[0];

    foreach($afreq as $freq){
        if($max<$valor) $max=$freq;
        if($min>$valor) $min=$freq;
    }

    

    $lmax;
    $lmin;
    
    foreach($afreq as $lletra=>$freq){
        if($freq==$max) $lmax[]=$lletra;
        if($freq==$min) $lmin[]=$lletra;
    }

    $resposta=["llista_lletres_max"=>$lmax,"llista_lletres_min"=>$lmin,"fmax"=>$max,"fmin"=>$min];

    return $resposta;
}



$resultat=retornaMaxiMin("Hola, que tal estas");


echo "<br>La\Les lletres que més surten són: ";

foreach($resultat["llista_lletres_max"] as $lletra){
    echo $lletra.",";
}


echo " i surten un total de ".$resultat["fmax"]." cops";


echo "<br>La\Les lletres que menys surten són: ";

foreach($resultat["llista_lletres_min"] as $lletra){
    echo $lletra.",";
}

echo " i surten un total de ".$resultat["fmin"]." cops";


?>


</body>
</html>