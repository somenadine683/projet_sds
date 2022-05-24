<?php
require ("connexion.php");


 if (isset($_POST['valider']))
{
 
     $nom= $_POST['nom_tut'];
     $prenom= $_POST['prenom_tut'];
     $email= $_POST['email_tut'];
    $telephone= $_POST['telephone_tut'];
     
     $stmt= $conn->prepare("INSERT INTO tuteur(nom_tut,prenom_tut,email_tut,telephone_tut) VALUES (?,?,?,?)");
     $stmt->execute(array($nom,$prenom,$email,$telephone ));
     echo'tuteur enrégistré avec succès';
     header('Location:etudiant.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>tuteur</title>
</head>
<body class="al8">


    <div class="al11">


<header class="al10">
</header>

<form action="" method= "POST" class="jean">
    
    <div class="mb-3 al1">
         <i class="fa fa-user" aria-hidden="true"></i>
         <input type="text" name="nom_tut" id="inp5" placeholder="nom">
    </div>
    <div class="mb-3 al1">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="prenom_tut" id="inp5"  placeholder="prenom">
    </div>
    <div class="mb-3 al1">
        <i class="fa-envelope-o" aria-hidden="true"></i>
        <input type="email" name="email_tut" id="inp5"  placeholder="email">
    </div>
    <div class="mb-3 al1">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <input type="text" name="telephone_tut" id="inp5"  placeholder="telephone">
    </div>
    <input type="submit" name="valider" id="valider">
</form>

</div>
  
<script src="./css/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
<script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>


</body>
</html>