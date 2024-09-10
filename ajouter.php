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

    <form name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">
           <h2 align="center">Ajouter une nouvelle voiture...</h2>
           <label><b>Immatriculation: </b></label>
           <input type="text" name="txtImm" class="zonetext" placeholder="Entrer Immatriculation" required>

           <label><b>Marque: </b></label>
           <input type="text" name="txtMarq" class="zonetext" placeholder="Entrer la Marque" required>

           <label><b>Prix de location: </b></label>
           <input type="number" name="txtPl" class="zonetext" placeholder="Entrer le Prix unitaire" required>
     
           <label><b>Photo: </b></label>
           <input type="file" name="txtphoto" class="zonetext" placeholder="choisir une image" required>

           <input type="submit" name="btAdd" value="Ajouter" class="submit">

          <p> <a href="accueil.php" class="submit">Tableau de Bord</a></p>

          <label style="text-align: center; color:#960406;">
            <?php 
            
            if(isset($_POST['btAdd']))
            {
                $imm=$_POST['txtImm'];
                $marque=$_POST['txtMarq'];
                $prixloc=$_POST['txtPl'];

                $image=$_POST['txtphoto']['tmp_name'];

                $traget="images/".$_FILES['txtphoto']['name'];

                move_uploaded_file($image,$traget);

                $reqAdd="INSERT INTO automobile(IMM,MARQUE,PRI_LOC,PHOTO) VALUES ('$imm','$marque','$prixloc','$traget')";

                $resultat=mysqli_query($cnloccar,$reqAdd);

                if($resultat)
                {
                    echo"Insertion des données validés";
                }
                else{
                    echo"Insertion des données invalidés";
                }
            }

            
            ?>
        
        </label>

    </form>


</div>
</body>
</html>