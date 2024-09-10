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
    <style>
        .photocar{
    width: 130px;
    height: 100px;
    border-radius: 5%;border: 1px solid;
}
    </style>
</head>
<body>

<p><h1><b>Liste des voitures disponibles...</b></h1>

<?php
  $reqselect="select * from automobile";
  $resultat=mysqli_query($cnloccar,$reqselect);
  
  $nbr=mysqli_num_rows($resultat);
  echo"<p> Total <b> ".$nbr."</b> voitures...</p>";


 ?>
 </p>
 <p><a href="Ajouter.php"><img src="images/imageajouter2 .jpg" width="50px" height="50px" ></a> </p>
 
    <table width="100%" border="1">

    <tr>
        <th>immatriculation</th>
        <th>Marque</th>
        <th>Prix de location</th>
        <th>Photo</th>
        <th>Supprimer</th>
        <th>Modifier</th>
    </tr>

    <?php
     while($ligne=mysqli_fetch_assoc($resultat))
     {

  
    ?>

     <tr>
         <td><?php echo $ligne['IMM'];?></td>
         <td><?php echo $ligne['MARQUE'];?></td>
         <td><?php echo $ligne['PRI_LOC'];?></td>
         <td><img src=' <?php echo $ligne['PHOTO'];?>' class="photocar"></td>
        <td><a href="supprimer.php?supcar=<?php echo $ligne['IMM'];?>"><img src="images/imagesupprimerm2.jpg" width="50px" height="50px"></a></td>
        <td><a href="modifier.php?mod=<?php echo $ligne['IMM'];?>"><img src="images/imagemodifier3.jpg" width="50px" height="50px"></a></td>

        </tr>

    <?php 
       }
    ?>

    </table>
 

</body>
</html>