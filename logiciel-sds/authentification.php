<?php

// require("login.php");
require("connexion.php");

if (isset($_POST['connecter']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];

    $stmt= $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->execute([$email]);
 if($stmt->rowCount()>0) { 
    $user = $stmt->fetch();
    if (  password_verify($password,$user['password'] ))
   {
       echo "identifiant valid";
        header('Location:tuteur.php');
        
    }
    else{
        echo  "identifiant invalid";
    }
} 
else{
    echo'utilisqteur inexidant';
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="authent">
    <header>
        <div class="ali"><img src="./images/Groupe 2.png" alt="" id="je"></div>
        <div class="cef"><h1>Veuillez entrer s'il vous plait</h1></div>
    </header>
<div class="container-py5">
    <form action="" method="POST">
        <div class="tu">
          <div class="jesus" >
            <input type="text" placeholder="email" name= "email" class="dieu">
          </div>
          <div class="jesus">
            <input type="text" placeholder="mot de passe" name = "password" class="dieu">
          </div>
         <div class="sub">
              <input type="submit" value="Se connecter"  name="connecter" id="ak">
            </div>
        </div> 
    </form> 
</div>
<footer>
    <div>
        <h3>Copyright@-2022</h3>
    </div>
</footer>

<script src="./css/bootstrap-5.1.3-dist/js/bootstrap.bundle.js.map"></script>
<script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>