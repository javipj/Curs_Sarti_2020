<?php
date_default_timezone_set("Europe/Berlin");

//phpinfo();

/*


Función que dado dos fechas :
-Nos diga cual es la mayor de las dos

*/

/*
Rep 2 paràmetres, dates, en format "dd-mm-aaaa"

Si data 1 és més gran que data 2, torna 1
Si data 2 és més gran que data 1, torna 2
Si són iguals torna 0

*/

function quinadataesmesgran3($data1,$data2){

    $resposta=0;


    $data1_segons_unix=mktime(0,0,0,explode("-",$data1)[1],explode("-",$data1)[0],explode("-",$data1)[2]);
    $data2_segons_unix=mktime(0,0,0,explode("-",$data2)[1],explode("-",$data2)[0],explode("-",$data2)[2]);

    if($data1_segons_unix>$data2_segons_unix){
        $resposta=1;
    }elseif($data1_segons_unix<$data2_segons_unix){
        $resposta=2;
    }else{
        $resposta=0;
    }

    return $resposta;



}


function quinadataesmesgran2($data1,$data2){

    $resposta=0;


    $data1_segons_unix=strtotime($data1);
    $data2_segons_unix=strtotime($data2);

    if($data1_segons_unix>$data2_segons_unix){
        $resposta=1;
    }elseif($data1_segons_unix<$data2_segons_unix){
        $resposta=2;
    }else{
        $resposta=0;
    }

    return $resposta;



}

function quinadataesmesgran($data1,$data2){

    $resposta=0;

    $dia1=explode("-",$data1)[0];
    $mes1=explode("-",$data1)[1];
    $any1=explode("-",$data1)[2];

    $dia2=explode("-",$data2)[0];
    $mes2=explode("-",$data2)[1];
    $any2=explode("-",$data2)[2];

    if($any1>$any2){
        $resposta=1;
    }else if($any1<$any2){
        $resposta=2;
    }else if($any1==$any2){
        if($mes1>$mes2){
            $resposta=1;
        }else if($mes1<$mes2){
            $resposta=2;
        }else if($mes1==$mes2){
            if($dia1>$dia2){
                $resposta=1;
            }else if($dia1<$dia2){
                $resposta=2;
            }else if($dia1==$dia2){
                $resposta=0;
            }
        }

    }

    return $resposta;

}



$resposta=quinadataesmesgran3("16-12-2024","16-12-2024");
switch($resposta){
case 1:{ echo " Data1 és més gran"; break;}
case 2:{ echo " Data2 és més gran"; break;}
case 0:{ echo " Data1 és igual a Data2";break;}


}

?>