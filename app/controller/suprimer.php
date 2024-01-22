<?php
require_once "../model/CRUDAppartement.php";
$crudapp = new crudeappartement();
$ref = $_GET['refernce'];
$p=$crudapp->suprimer($ref);
header("location:listerlesapatement.php?etat=1");
