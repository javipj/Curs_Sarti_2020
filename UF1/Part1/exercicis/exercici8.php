<?php
/*
Función que dada una fecha
-Si está en formato EEUU que nos la
transforme en formato europeo.
- Si está en formato europeo que nos la
transforme en formato EEUU.
-
Podremos añadir un parámetro de formato de
fecha
Formato europeo: dd/mm/AAAA
Formato EEUU: mm/dd/AAAA


xx/xx/xxxx


*/

function canviformatdata($data){

    return explode("/",$data)[1]."/".explode("/",$data)[0]."/".explode("/",$data)[2];


}


$data="12/21/2012";

echo "La data $data en format eu és:".canviformatdata($data);


?>