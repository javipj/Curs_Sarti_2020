<?php
session_start();

if(!isset($_SESSION["username"])){
    header("location:index.php");
}

if(isset($_REQUEST["logout"])){
    $_SESSION=null;
    setcookie("username",null,null);
    setcookie("password",null,null);
    session_destroy();
    header("location:index.php");
}


echo "<a href=\"?logout\">[logout]</a> "
?>