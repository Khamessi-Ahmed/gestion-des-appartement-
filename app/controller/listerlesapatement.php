<?php
require_once "../model/CRUDAppartement.php";
$app = new crudeappartement();
$LESapartement = $app->listerapp();
include "../View/listerappartement.php";