<?php require_once('connexion.php') ?>
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
    <form name="formUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data" >
       <h2 align="center"> Mettre a jour une voiture...</h2>

       <label><b>Immatriculation:</b></label>
       <input type="text" name="txtImm" class="zonetext" value="<?php echo $_GET['mod'] ?>" readonly >

       
       <label><b>Marque:</b></label>
       <input type="text" name="txtMarq" class="zonetext" placeholder="Entrer la marque de la voiture..." required>

       <label><b>Prix de location:</b></label>
       <input type="number" name="txtPl" class="zonetext" placeholder="Entrer le prix unitaire..." required>

       <label><b>Photo:</b></label>
       <input type="file" name="txtphoto" class="zonetext" placeholder="choisir une image..." >

       <input type="submit" class="submit" name="btmod" value="Mettre a Jour" >

       <p><a href="accueil.php" class="submit">Tableau de Bord</a></p>
        <label style="text-align:center; color:#360001;" >
        <?php
        if(isset($_POST['btmod']))
        {
            $imm=$_POST['txtImm'];
            $marque=$_POST['txtMarq'];
            $prixloc=$_POST['txtPl'];

            $modifier=$_GET['mod'];

            $image=$_FILES['txtphoto']['tmp_name'];

            $traget="images/".$_FILES['txtphoto']['name'];

            move_uploaded_file($image,$traget);

            $reqUp="UPDATE automobile SET MARQUE='$marque', PRI_LOC='$prixloc',PHOTO='$traget' WHERE IMM='$modifier'";

            $resultat=mysqli_query($cnloccar,$reqUp);

            if($resultat)
            {
                echo "Mise a Jour des données validés";
            }else{
                echo"Echec de modification des données";
            }





        }


         ?>

        </label>


    </form>

</div>    



</body>
</html>