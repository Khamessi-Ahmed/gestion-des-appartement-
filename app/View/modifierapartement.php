<?php

ob_start();
echo "<h1>modifier appartement sans changement de referance</h1>";
?>
<form action="../controller/modifier.php" method="post">
refernce: <input type="text" name="refernce"  value="<?= $p[0] ?>"></br>
propriete: <input type="text" name="propriete" value="<?= $p[1] ?>"></br>
localite: <input type="text" name="localite"  value="<?= $p[2] ?>"></br>
surface: <input type="text" name="surface" id="" value="<?= $p[3] ?>"></br>
nbpices<input type="number" name="nbpices" value="<?= $p[4] ?>"></br>
domaineusage: <input type="text" name="domaineusage" value="<?= $p[5] ?>">
surfaceespacecommun <input type="text" name="surfaceespacecommun" id="" value="<?= $p[6] ?>">
   
    <input type="submit" value="modifier" name="ok">
</form>
<?php
$contenu = ob_get_clean();
include "layout.php";