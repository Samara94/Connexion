<?php
include_once('Dbconnect.php');
include_once('User.php');

$connect=new Dbconnect();	
$user = new User($connect);



?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        </head>
    <body>
<p> Bienvenu </p>
   
</body>
</html>

