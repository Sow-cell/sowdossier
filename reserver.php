<?php
require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carstyle.css">
</head>
<body>
<div id="container">
    <form action="" method="post" class="formulaire">
        <h1>Reservation voiture</h1>
        <label><b>firstname:</b></label>
        <input type="text" placeholder="Entrer le prenom d'utilisateur" name="txtfirst" required class="zonetext">

        <label><b>lastname:</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlast" required class="zonetext">

        <label><b>email:</b></label>
        <input type="email" placeholder="Entrer votre montant" name="txtmail" required class="zonetext">

        <label><b>payer:</b></label>
        <input type="text" placeholder="Entrer la somme" name="txtpay" required class="zonetext">

        <label><b>date_resvertion:</b></label>
        <input type="date" placeholder="Entrer la date" name="txtdate" required class="zonetext">
 
        <div class="btn" >
        <input   type="submit" name="valider" value="valider" id="valider" />
         <input   type="submit" name="annuler" value="annuler" id="annuler"/>


         </div>  

    </form>



</div>



<?php

if(isset($_POST['valider']))
{
    $first=$_POST['txtfirst'];
    $last=$_POST['txtlast'];
    $mail=$_POST['txtmail'];
    $pay=$_POST['txtpay'];
    $date=$_POST['txtdate'];

    $reqAdd="INSERT INTO reservation(prenom,nom,mail,payer,datereservation) VALUES ('$first','$last','$mail','$pay','$date')";

    $resultat=mysqli_query($cnloccar,$reqAdd);

    if($resultat)
    {
        echo"reservation validée";
    }
    else{
        echo"reservation invalide";
    }
}
?> 
    
</body>
</html>