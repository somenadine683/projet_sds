<?php
require ("connexion.php");
if (isset($_POST['envoyer']))
{
     $nom= $_POST['nom'];
     $prenom= $_POST['prenom'];
     $birth= $_POST['birthday'];
     $telephone= $_POST['telephone'];
     $email= $_POST['email'];
   $telephone_tut= $_POST['telephone_tut'];
     
     $stmt= $conn->prepare("INSERT INTO etudiant(nom,prenom,birthday,telephone,email,telephone_tut) VALUES(?,?,?,?,?,?)");
     $stmt->execute(array($nom,$prenom,$birth,$telephone,$email,$telephone_tut));
     echo'etudiant enrégistré avec succès';
    
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
        <button type="submit" name= "envoyer" class="btn btn-primary">S'inscrire</button>
        <div class="mb-3 al1">
             <i class="fa fa-user" aria-hidden="true"></i>
             <input type="text" name="nom" id="inp5" placeholder="nom">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="prenom" id="inp5"  placeholder="prenom">
        </div>
        <div class="mb-3 al1"><i class="fa fa-birthday-cake" aria-hidden="true"></i>
            <input type="text" name="birthday" id="inp5"  placeholder="date de naissance">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="text" name="telephone" id="inp5"  placeholder="telephone">
        </div>
        <div class="mb-3 al1">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input type="text" name="email" id="inp5"  placeholder="email">
        </div>

            
        <select class="form-select" aria-label="Default sele example" name="telephone_tut">
        <option selected class=""><strong>Choisir un tuteur</strong></option>
           
        <?php
        
             $stmt= $conn->query("SELECT * FROM tuteur");
             while ($donnees= $stmt->fetch()){
                echo'<option>'.$donnees['telephone_tut'].'</option>';
             }

         ?>    
           
            
           
       
</select>
</form>
</div>
</div>
    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>