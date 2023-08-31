<?php
    include_once "connexion.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <form method="post" class="col-xl-6 text-center text-white rounded-3 mt-5 container p-3 fw-bolder bg-primary" >
        <div class='mt-3 mb-5'><img src="ista-white-logo.png" width="100px"></div>         
        <label for="" class="form-label h5">Nom</label><br>
        <input type="text" name="noma" class="form-control" required><br>
        <label for=""class="form-label h5">Mot de passe</label><br>
        <input type="password" class="form-control" name="pwda" required><br>
        <input type="submit" class="btn btn-info   w-25" value="Connecter" name="login">
    </form>
    <?php

    if(isset($_POST['login'])){
        $sql="SELECT noma, pwd FROM admin WHERE noma=? AND pwd=?";
        $req=$db->prepare($sql);   
        $req->execute(array($_POST["noma"],$_POST["pwda"]));
        if($req->rowCount()===1){

           
            while($donnees=$req->fetch()){
                $_SESSION["noma"]=$donnees["noma"];
            
                $_SESSION["pwd"]=$donnees["pwda"];
                
           
          }
            header ("location: dashboard.php");
            
        }
        else{
            echo "<h1 class='h1 text-danger  ms-4 mt-4'>Incorrect Name or Password</h>";
        }
    }
    ?>
    
</body>
</html>