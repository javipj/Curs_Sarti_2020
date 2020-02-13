<?php
if(isset($_REQUEST["enviar"])){



    
    $dir_subida = 'uploads/';
    $fichero_subido = $dir_subida .basename($_FILES['imatge']['name']);

    if (move_uploaded_file($_FILES['imatge']['tmp_name'], $fichero_subido)) {

        ?>

            El nom és:<?=$_REQUEST["nom"]?><br>

            La desc és:<?=$_REQUEST["desc"]?><br>

            El preu és:<?=$_REQUEST["preu"]?><br>

            La imatge és:

            <img src="<?=$fichero_subido?>" alt=""><br>

            La data és <?=$_REQUEST["data"]?><br>


        <?php




    } else {
        echo "¡Error en el upload!\n";
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
    <form  enctype="multipart/form-data" method="post">

        Nom: <input type="text" name="nom" id=""><br>
        Descripció <input type="text" name="desc" id=""><br>
        Preu: <input type="number" name="preu" id=""><br>
        Imatge: <input type="file" name="imatge" id=""><br>
        <input type="hidden" name="data" value="<?=date("ymd")?>">
        <input type="submit" value="enviar" name="enviar">




    </form>
</body>
</html>


<?php



}



?>