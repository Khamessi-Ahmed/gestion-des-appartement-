<?php
require_once "../model/CRUDAppartement.php";
$crudapp = new crudeappartement();
if(isset($_POST['ok'])){
 $ref= $_POST['ref'];
    $res=$crudapp->result($ref);
    $LESapartement=$res;
    include "../View/listerappartement.php";
}

