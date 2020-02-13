<?php
/*
Función que dada una fecha :
- Se nos devuelva por escrito el día y mes
como si fuese una carta formal:
P.E. de 19/03/2014 pasamos a
“Miercoles, 19 de Marzo del 2014”
-Podemos dar por hecho que se recibirá
esta fecha en formato europeo.

*/


function formateaFecha($fecha){

  setlocale(LC_TIME,"esp","es_ES.UTF-8");

  return strftime( "%A, %d de %B del %Y" ,mktime(0,0,0,explode("/",$fecha)[1],explode("/",$fecha)[0],explode("/",$fecha)[2]));



}

function formateaFecha2($fecha){

    setlocale(LC_TIME,"esp","es_ES.UTF-8");
  
    return strftime( "%A, %d de %B del %Y" ,strtotime(str_replace("/","-",$fecha)));
  
  
  
  }
  


echo formateaFecha2("23/12/2023");



?>