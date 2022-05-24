<?php
// ouverture d'une connexion dans la base de données
try{
   $conn = new PDO ('mysql:host=localhost; dbname=ufr_sds; charset=utf8','root','');
   
}
catch (Exception $e)
{
die ('Error : ' . $e->getMessage ());
}
?>