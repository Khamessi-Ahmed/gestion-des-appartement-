<?php
require_once "../model/CRUDAppartement.php";
$crudapp = new crudeappartement();


if (isset($_POST['ok'])) {
    $refernce = $_POST['refernce'];
    $propriete = $_POST['propriete'];
    $localite = $_POST['localite'];
    $surface = $_POST['surface'];
    $nbpices= $_POST['nbpices'];
    $domaineusage = $_POST['domaineusage'];
    $surfaceespacecommun = $_POST['surfaceespacecommun'];
    
   
    
    $p = new apartement(null,$propriete,$localite,$surface,$nbpices,$domaineusage,$surfaceespacecommun);
  
    $res = $crudapp->ajouterapp($p);
    if ($res) {
        header("location:listerlesapatement.php?etat=3");
        exit;
    }
}


require "../View/ajouterapartement.php";


