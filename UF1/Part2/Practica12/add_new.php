<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    //teórica validaciń del formulaio.......


    //upload de fchero

    
    $fichero_subido = basename($_FILES['imagen']['name']);

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
        
            //
     


    } else {
        echo "¡Error subiendo fichero...!\n";
    }



    //si todo está bien, mostrar los valores:

    echo "EL título de la noticia es ".$_REQUEST["titulo"]."<br>";
    echo "La desc ess ".$_REQUEST["descripcion"]."<br>";
    echo "<img src=\"$fichero_subido\" >";
    die();


}

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
<h1>Añadir nueva noticia</h1>
    <form  method="post"  enctype="multipart/form-data">
        Título: <input type="text" name="titulo" id=""><br>
        Desc: <textarea name="descripcion" id="" cols="30" rows="10"></textarea><br>
        Imagen: <input type="file" name="imagen" id=""><br>
        <input type="submit" value="Crear">

        
    
    </form>
</body>
</html>