<?php
ob_start();
echo "<h1>Liste des appartement</h1>";

if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    switch ($etat) {
        case '1':
            echo "<script>
            alert('le appartement a été supprimé avec succées');</script>";
            break;
        case '2':
            echo "<script>alert('le appartement a été modifié avec succées');</script>";
            break;
        case '3':
            echo "<script>alert('le appartemnt a été inséré avec succées');</script>";
            break;
    }
}
?>
<form action="../controller/rechercher.php" method="post">
<input type="number" name="ref" id="">
<input type="submit" name="ok" value="rechercher">
</form>
<table class="table" id="example">
    <thead>
        <tr class="table-success">
            <th>refernce</th>
            <th>propriete</th>
            <th>localite</th>
            <th>surface </th>
            <th>nbpices</th>
            <th>domaineusage</th>
            <th>surfaceespacecommun</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($LESapartement as $appart) {
            echo "<tr>
        <td>$appart[0]</td>
        <td>$appart[1]</td>
        <td>$appart[2]</td>
        <td>$appart[3]</td>
        <td>$appart[4]</td>
        <td>$appart[5]</td>
        <td><a href='../controller/suprimer.php?refernce=$appart[0]'>Supprimer</a></td>
        <td><a href='../controller/modifier.php?refernce=$appart[0]'>Edit</a></td>
           </tr>";
        }

        echo "</tbody></table>";
        echo "<a href='../controller/ajouterapp.php' class='btn btn-primary btn-sm'>Ajouter un appartement</a>";

        $contenu = ob_get_clean();
        include "layout.php";
