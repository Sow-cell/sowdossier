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
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Javascript build with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
<h1>A propos du site</h1>
    
<p>
        Bienvenue dans notre site web location de location de voiture <br>Vous pouvez y trouver différentes types de voiture avec la marque de votre choix.
        nis, nihil a cupiditate velit obcaecati quis natus itaque placeat <br> et provident perspiciatis quae temporibus dolore quibusdam accusamus. At, ipsum?
    </p> <br> <br>
   <div id="entete">

   <a href="login.php" class="login">Login</a>
   <a href="reserver.php" class="reserver">reserver</a>
    <video autoplay="autoplay" class="video_entete">
        <source src="images/pubcar.mp4" type="
        video/mp4" />
    </video>

    <p class="nomsite">Location CAR</p>
    <div id="formauto">
        <br name="formauto" method="$_POST" action="">
            <input id="motcle" type="text" name="motcle" placeholder="   Recherche par Marque..."/>
            <input class="btfind" type="submit" name="btsubmit" value="Recherhce" /> </br> </br>
            
            
        </form>
    </div>

    

   </div> 
   <div id="articles">
    <?php
     if(isset($_POST['btsubmit'])){
        $mc=$_POST['motcle'];
        $reqselect="select * from automobile where MARQUE like '%$mc'";
     }
     else{
        $reqselect="select * from automobile";
     }
     $resultat=mysqli_query($cnloccar,$reqselect);
     $nbr=mysqli_num_rows($resultat);
     echo "<p><b>".$nbr." </b> Resultats de votre recherche...</p>";
     while($ligne=mysqli_fetch_assoc($resultat))
     {
    ?>
    <div id="auto">
    <a href="reserver.php">
    <img src="<?php echo $ligne['PHOTO']?>"/>

    </a>   <br> 
     <?php echo $ligne['IMM']; ?></br>
     <?php echo $ligne['MARQUE']; ?></br>
     <?php echo $ligne['PRI_LOC']; ?></br>

    </div>
    
    <?php 
    }
    ?>

   </div>
</body>
</html>