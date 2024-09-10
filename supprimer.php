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
<div id="container" >

    <form name="formdelet" class="formulaire">

    <p><a href="accueil.php" class="submit">Tableau de Bord</a></p>
    </form>




  <?php 
  if(isset($_GET['supcar']))
  {
    $sup=$_GET['supcar'];
    $reqdelete=" DELETE FROM automobile WHERE IMM='$sup'";
    $resultat=mysqli_query($cnloccar,$reqdelete);

  }

  if($resultat)
  {
    echo" <label style='text-align: center; color:#960406;'>La suppression a été correctement effectuée...</label>";
  }
  else
  {
  
    echo" <label style='text-align: center; color:#960406;'>La suppression a échouée...</label>";

  }




  ?>
  </div>




    
</body>
</html>