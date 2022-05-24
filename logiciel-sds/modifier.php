<?php
require ("connexion.php");
$id=$_GET['updateid'];
$req = $conn->prepare("SELECT * FROM etudiant WHERE id= '$id'  ");
$req->execute();
$donnees = $req->fetch();
$nom = $donnees['nom'];
$prenom = $donnees['prenom'];
$birthday = $donnees['birthday'];
$telephone = $donnees['telephone'];
$email = $donnees['email'];
$telephone_tut = $donnees['telephone_tut'];



if (isset($_POST['modifier'])){


    $nome= $_POST['nom'];
     $prenome= $_POST['prenom'];
     $birthdaye= $_POST['birthday'];
     $telephonee= $_POST['telephone'];
     $emaile= $_POST['email'];
   $telephone_tute= $_POST['telephone_tut'];

   $query = $conn->prepare("UPDATE etudiant SET nom=?, prenom=?, birthday=?, telephone=?, email=?, telephone_tut=? WHERE id=?");
   $query->execute(array($nome,$prenome,$birthdaye,$telephonee,$emaile,$telephone_tute,$id));
   header("location:liste.php");

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Etudiant</title>
</head>
<style>
    
</style>
<body class="nad" >
    <div class="al2">
        <div class="al3">
            
    <form action="" method="POST" class="ali">
        <button type="submit" name= "modifier" class="btn btn-primary">Modifier</button>
        <div class="mb-3 al1">
             <i class="fa fa-user" aria-hidden="true"></i>
             <input type="text" name="nom" id="inp5" placeholder="nom" value="<?php echo $donnees['nom'] ?>">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="prenom" id="inp5"  placeholder="prenom" value="<?php echo $donnees['prenom'] ?>" >
        </div>
        <div class="mb-3 al1"><i class="fa fa-birthday-cake" aria-hidden="true"></i>
            <input type="text" name="birthday" id="inp5"  placeholder="date de naissance" value="<?php echo $donnees['birthday'] ?>">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="text" name="telephone" id="inp5"  placeholder="telephone" value="<?php echo $donnees['telephone']?>">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input type="text" name="email" id="inp5"  placeholder="email" value="<?php echo $donnees['email']?>">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input type="text" name="email" id="inp5"  placeholder="false" value="<?php echo $donnees['telephone_tut']?>">
        </div>

<!--             
        <select class="form-select" aria-label="Default sele example" name="telephone_tut"   value="">
        <option selected class=""><strong>/strong></option> -->
           
       
            
           
       
</select>
</form>
</div>
</div>
    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>