<?php
require_once "config/connexion.php";
$objet = new connexion();
$connexion = $objet->getConnexion();

for ($i = 1; $i <= 10; $i++) {
    $refernce = $i;
    $propriete = "ahmed khammassi";

    $local ="tunis";
   $surface = random_int(1, 100);
      $nbpices = random_int(0, 5);
    $domaineusage = "informatique";
    $surfaceespacecommun= random_int(1, 100);
    $sql = "insert into apartement values($refernce,' $propriete','$local',$surface, $nbpices,
            '$domaineusage ',$surfaceespacecommun)";
    $res = $connexion->exec($sql);
}
header("location:controller/listerlesapatement.php");
