
<?php

ob_start();
echo "<h1>Ajout d'un nouveau appartement</h1>";
?>
<form action="../controller/ajouterapp.php" method="post">
refernce: <input type="text" name="refernce"></br>
propriete: <input type="text" name="propriete"></br>
localite: <input type="text" name="localite"></br>
surface: <input type="text" name="surface" id=""></br>
nbpices<input type="text" name="nbpices"></br>
domaineusage: <input type="text" name="domaineusage">
surfaceespacecommun <input type="text" name="surfaceespacecommun" id="">
   
    <input type="submit" value="ajouter" name="ok">
</form>
<?php
$contenu = ob_get_clean();
include "layout.php";

