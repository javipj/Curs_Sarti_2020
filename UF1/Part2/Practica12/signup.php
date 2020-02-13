<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$nombre="";
$email="";
$password1="";
$password2="";

$enombre="";
$eemail="";
$epassword1="";
$epassword2="";

$errores=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nombre=test_input($_REQUEST["nombre"]);
    $email=test_input($_REQUEST["email"]);
    $password1=test_input($_REQUEST["password1"]);
    $password2=test_input($_REQUEST["password2"]);

    if (!preg_match("/^[a-zA-Z]+$/",$nombre)) {
        $enombre = "Only letters";
        $errores=true;
        $nombre="";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $eemail = "Invalid email format";
        $errores=true;
        $email="";
    }

    if($password1!=$password2){
        $epassword1 = "Passwords no coinciden";
        $errores=true;
        $password1=$password2="";
    }else{

        $tieneLetras=preg_match("/[a-zA-Z]/",$password1);
        $tieneNumeros=preg_match("/[\d]/",$password1);
        $tieneEspeciales=preg_match("/[^a-zA-Z\d]/",$password1);
        $tieneLongitud=strlen($password1)>=6?true:false;

        if(!$tieneLetras){
            $epassword1 .= "Faltan letras...";
            $errores=true;
            $password1=$password2="";


        }
        if(!$tieneNumeros){
            $epassword1 .= "Faltan números...";
            $errores=true;
            $password1=$password2="";

        }
        if(!$tieneEspeciales){
            $epassword1 .= "Faltan lespeciales...";
            $errores=true;
            $password1=$password2="";

        }
        if(!$tieneLongitud){
            $epassword1 .= "mínimo 6 carácteres";
            $errores=true;
            $password1=$password2="";

        }







    }


    if(!$errores){

        echo "Registro completado correctamente!";
        echo "<br>";
        print_r($_REQUEST);
        die();


    }

    



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
    <form  method="post">
      Nombre: <input type="text" name="nombre" value="<?=$nombre?>"><span style="color:red;"><?=$enombre?></span><br>
      Email: <input type="text" name="email" value="<?=$email?>"><span style="color:red;"><?=$eemail?></span><br>
      Password: <input type="password" name="password1" value="<?=$password1?>"><span style="color:red;"><?=$epassword1?></span><br>
      Repite Password: <input type="password" name="password2" value="<?=$password2?>"><span style="color:red;"><?=$epassword2?></span><br>

      <input type="submit" value="Enviar">
    
    
    
    
    </form>
</body>
</html>
