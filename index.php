<?php

include_once('Dbconnect.php');
include_once('User.php');

$connect=new Dbconnect();	
$user = new User($connect);

if(isset($_POST['Valider'])){
	if ($user->login($_POST['login'],$_POST['pass'])){
	
		header('location: home.php');
	}	
	
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Page de connection</title>
        </head>
    <body>

    <center>
        <form method="POST">  
            <label><center>CONNEXION</center><a/label>
    <table>
        <tr>
            <td>
                <input type =" text" name ="login"  placeholder="Identifiant..." required/>    
            </td>
        </tr>
        <tr>
            <td> 
                <input type =" password" name ="pass"  placeholder="Mot de passe..." required/>
            </td>
        </tr>
        <tr>
            <td> 
                <input type="submit" name="Valider"/>
            </td>
        </tr>
        <br/><br/>  

    </table>
</form> 
</center>

</body>
</html>

