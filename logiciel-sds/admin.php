<?php
require ("connexion.php");
 if (isset($_POST['envoyer']))
{
 if(!empty( $_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['password']))
   { 
     $nom= $_POST['nom'];
     $prenom= $_POST['prenom'];
     $email= $_POST['email'];
     $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
     $confirm_password=  password_hash($_POST['confirm_password'],PASSWORD_DEFAULT);
     $stmt= $conn->prepare("INSERT INTO admin (nom,prenom,email,password) VALUES (?,?,?,?)");
     $stmt->execute(array($nom,$prenom,$email,$password ));
     echo'admin enrégistré avec succès';
     header('Location:authentification.php');
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
  
  <div class="container py-5">
    <h2>ADMINISTRATEUR</h2>

   
    <form action="" method="POST">
    
      <div class="mb-3">
        <input type="text" placeholder="nom" name="nom" class="inp">
      </div>
      <div class="mb-3">
        <input type="text" placeholder="Prenom" name="prenom" class="inp">
      </div>
      <div class="mb-3">
        <input type="email" placeholder="email"  name="email" class="inp">
      </div>
      <div class="mb-3">
        <input type="password" placeholder="mot de passe"  name="password"class="inp">
      </div>
      <div class="mb-3">
        <input type="password" placeholder="Confirmer mot de passe"  name="confirm_password" class="inp">
      </div>
      <div class="sub"><input type="submit" value="S'inscrire"  name="envoyer" id="ok"></div>
    </form>
  </div>

 
<script src="./css/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script> 
 <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
 

</html>