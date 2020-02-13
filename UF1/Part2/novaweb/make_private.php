<?php

session_start();

if(!isset($_SESSION["user"])){

    header("location:login.php");


}


if(isset($_REQUEST["logout"])){

    $_SESSION=null;
    session_destroy();
    header("location:login.php");

}


echo     '<a href="?logout">[logout]</a>';

?>