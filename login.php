<?php
require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="carstyle.css">
</head>
<body>
    
<div id="container">
    <form action="" method="post" class="formulaire">
        <h1>Connexion</h1>
        <label><b>Username:</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required class="zonetext">

        <label><b>password:</b></label>
        <input type="password" placeholder="Entrer le mot de password" name="txtpw" required class="zonetext">

        <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit" >

    </form>

</div>   

<?php
if(isset($_POST['btlogin']))
{
    $req="select * from users where login='".$_POST['txtlogin']."' and password='".$_POST['txtpw']."'";
if($resultat=mysqli_query($cnloccar,$req))
{
    $ligne=mysqli_fetch_assoc($resultat);
    if($ligne!=0)
    {
        session_start();
        $_SESSION['monlogin']=$_POST['txtlogin'];
        header("location:accueil.php");
    }
    else{
        echo"<font color='#F0010'>login ou password invalide</font>";
    }
}
}
?>
</body>
</html>