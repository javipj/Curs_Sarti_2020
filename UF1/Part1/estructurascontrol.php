<?php

$var1=[2,3,4];
$var2=["a","c","d"];


function esArray($array){

    $esArrayNormal=TRUE;


        $longitud=count($array);

        
        for($i=0;$i<$longitud;$i++){
        
            if(!isset($array[$i])){
                //echo "<br>És un array associatiu";
                $esArrayNormal=FALSE;
        
            }
        
        }
        
        
        $contador=0;
        if($esArrayNormal){
            foreach($array as $key=>$value){
                if($contador!=$key){
                    $esArrayNormal=FALSE;
                }
                $contador++;
            }
        }
        
    return $esArrayNormal;
}






//$var3=["j"=>"dsds","jio"=>"dsds","uuids"=>"hjdhs","hola"=>3,"hola"=>4];
$var3=["dsdsds"=>"dsds","jio"=>"dsds","0"=>"hjdhs","hola"=>3,"hola"=>4];
//$var3=[2=>2,0=>1,1=>4];
//$var3=[0=>2,1=>3,2=>4];


if(esArray([0=>2,1=>3,2=>4])){
    echo "<br>És un array";
}else{
    echo "<br>És un array associatiu";

}





/* 
//$hora = date("G");
$hora =1;

if($hora>=7&&$hora<=13){
    echo "<br>buenos días";
}else if($hora>=14&&$hora<=20){
    echo "<br>bona tarda";
}else{
    echo "<br>bona nit";
} */


/* 

$a=[0,2];
$b=["verde"=>33,"rojo"=>"hola"];

echo count($a);

echo count($b);
 */





/* 
for($i=0;$i<10;$i++){
    echo "<br>$i";

}
$a=[0,2,3,4];
$b=["rojo"=>"ff000","verde"=>"00ff00","azul"=>"0000FF"];
print_r($a);
print_r($b);

foreach ($b as $trtrtrtr=>$valor) {
    echo "<br>";
    print_r($trtrtrtr);
    echo "<br>";
    print_r($valor);
}


$i=5;
while($i<8){
    echo $i++."<br>";
}

$i=8;
do{
    echo "<br>".$i++."<br>";

}while($i<8);

 */
/* 
$a=rand(1,8);
echo "<br>En aquesta situació a val $a<br>";
switch($a){

    case 3:{ echo "<br>3<br>"; break;}
    case 4:{ echo "<br>4<br>"; break;}
    case 1:{ echo "<br>1<br>"; break;}
    case 2:{ echo "<br>2<br>"; break;}

    default: { echo $a;break;}



}


echo date('l jS \of F Y h:i:s A');
 */


?>