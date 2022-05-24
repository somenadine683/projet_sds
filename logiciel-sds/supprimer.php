<?php
require ('connexion.php');
$req =$conn->prepare("DELETE FROM etudiant WHERE id='$_GET[id]'");
$req->execute();
header('location:liste.php');
?>