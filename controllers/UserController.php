<?php

var_dump($_POST);
var_dump($_POST['email']);
var_dump($_POST['pswd']);
session_start();
$_SESSION["user"]=$_POST['email'];
var_dump($_SESSION["user"]);exit();
exit();

?>