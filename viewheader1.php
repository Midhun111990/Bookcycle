<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<?php
session_start();
$aid=$_SESSION['uname'];
if(!$aid)
{
  header("location:logout.php");
}
include "connection.php";
?>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.php"><span class="color-highlight">Book Cycling System</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="active"><a href="librarianhome.php">Home</a></li>
           
        </ul>

      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
<br><br><br><br>