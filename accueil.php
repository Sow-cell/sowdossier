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

<div id="global">

 <div id="profil" >
    <?php 
    session_start();
    echo "Bonjou et Bienvenue ".$_SESSION['monlogin']."<br>";

    $req="select * from users where login='".$_SESSION['monlogin']."'";
    $resultat=mysqli_query($cnloccar,$req);
    $ligne=mysqli_fetch_assoc($resultat);

    ?>
    <img src="<?php echo $ligne ['my_photo'];?>" class="myphoto">
    <br>
    <a href="deconnecter.php">Deconnection</a>
 </div>
 
 <div id="tableaudebord" >

     <?php
         include("tableaudebord.php")
      ?>
   
 </div>

</div>


    
</body>
</html>