<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>liste</title>
</head>
<body class="mama">
    <header class="grand">
        <div class="abi"><img src="./images/Groupe 2.png" alt="" id="elle"></div>
        <div class="accord">
            <div class="avi"><h1>Unité de Formation et de Recherche en</h1></div>
        <div class="odi"><h1>Sciences De la Santé</h1></div>
        </div>
    </header>

    <main>
      <div class="vie">
        <button type="submit" class="btn btn-primary un">S'inscrire</button>
      <table class="table table-bordered">
                <div class="titre"><h3>Liste des Etudiants</h3></div>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">date de naissance</th>
                    <th scope="col">telephone</th>
                    
                    <th scope="col">email</th>
                    <th scope="col">telephone_tut</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody class="femme">
                <?php
                require('connexion.php');
                $req=$conn->query('SELECT * FROM etudiant');
                $id=1;
                while($donnees=$req->fetch())
                 {
                  echo '<tr>';
                  echo '<th scope="row">'.$id.'</th>';
                  echo     '<td>'.$donnees['nom'].'</td>';
                 echo  '<td>'.$donnees['prenom'].'</td>';
                 echo  '<td>'.$donnees['birthday'].'</td>';
                 echo  '<td>'.$donnees['telephone'].'</td>';
                 echo  '<td>'.$donnees['email'].'</td>';
                 echo  '<td>'.$donnees['telephone_tut'].'</td>';
                  
                  echo'<td>
                  <a href="supprimer.php?id='.$donnees['id'].'"><ion-icon name="trash-outline"></ion-icon></a>
                  <a href="modifier.php?updateid='.$donnees['id'].'"><ion-icon name="pencil-outline"></ion-icon></a>
                  </td>';
                  echo '</tr>';
                  $id++;
                 }
                   ?>
                  
                </tbody>
              </table>
       </div>

        <footer class="chacun">
          <div class="chaque">
              <h3>Copyright@-2022</h3>
          </div>
      </footer>
      
    </main>
    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>