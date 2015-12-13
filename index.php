<?php

include_once('Dbconnect.php');
include_once('User.php');
$connect=new Dbconnect();	

$user = new User($connect);
$user->login();

?>