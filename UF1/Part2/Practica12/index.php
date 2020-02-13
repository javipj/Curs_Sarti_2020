<?php
session_start();


if(isset($_COOKIE["username"])&&isset($_COOKIE["password"])){
    if($_COOKIE["username"]=="javi"&&$_COOKIE["password"]=="e10adc3949ba59abbe56e057f20f883e"){
        
        $_SESSION["username"]=$_COOKIE["username"];
        header("location:home.php");


    }else{

        setcookie("username",null,null);
        setcookie("password",null,null);


    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_REQUEST["usuario"]=="javi"&&md5($_REQUEST["password"])=="e10adc3949ba59abbe56e057f20f883e"){
        $_SESSION["username"]=$_REQUEST["usuario"];

        if(isset($_REQUEST["autologin"])){
            setcookie("username",$_REQUEST["usuario"],time()+7*24*60*60);
            setcookie("password",md5($_REQUEST["password"]),time()+7*24*60*60);
        }

        header("location:home.php");
        
    }else{

        echo "error en el login. revisa credenciales";
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
    <form method="post">
    Usuario: <input type="text" name="usuario" id=""><br>
    Password: <input type="password" name="password" id=""><br>
    Auto Login <input type="checkbox" name="autologin" id="">
    <input type="submit" value="Login"><br>
    <button><a  href="signup.php">Registrar</a></button>
    
    </form>
</body>
</html>