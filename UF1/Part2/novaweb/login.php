<?php
session_start();

if(isset($_REQUEST["enviar"])){


    
    if( $_REQUEST["user"]=="javi" && $_REQUEST["passwd"]=="1234" ){

        $_SESSION["user"]=$_REQUEST["user"];
        header("location:contacte.php");

    }else{
        echo "error en el login";
    }
        

   
        
}

$haycookie=false;

if(isset($_REQUEST["politicacookies"])){

    setcookie("politicacookies","hola",time()+365*24*60*60);
    $haycookie=true;

}



if(isset($_COOKIE["politicacookies"])){
    $haycookie=true;
    echo $_COOKIE["politicacookies"];
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

<?php
if($haycookie){


?>
<div id="form">
    <form  method="post">
    <input type="text" name="user" id="">
    <input type="password" name="passwd" id="">
    <input type="checkbox" name="autologin" id="">

    <input type="submit" value="enviar" name="enviar">
    </form>
</div>

<?php
}else{




?>
<div id="cookies" >
<br>
<p>¿aceptas la política de cookies?<p>
<a href="?politicacookies">si</a><a href="http://www.disney.com">no</a>

</div>
<?php

}

?>
</body>
</html>

