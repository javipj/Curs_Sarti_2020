<?php

if(isset($_REQUEST["Enviar"])){
    echo "envio cosas...";

    
    $dir_subida = 'uploads/';
    $fichero_subido = $dir_subida .basename($_FILES['fichero']['name']);

    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $fichero_subido)) {
        
        echo "<img src=\"$fichero_subido\" >";
        echo "<a href=\"$fichero_subido\" >aaaa</a>";

     


    } else {
        echo "¡Error!\n";
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
    <form method="post"  enctype="multipart/form-data" >
        <input type="file" name="fichero" id="">
        <input type="submit" value="Enviar" name="Enviar">


    </form>
</body>
</html>


<?php


}


?>