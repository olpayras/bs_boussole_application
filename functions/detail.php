<?php
include "../html/header.php";

// Function to delete the application from the database
function deleteApplication($id)
{
    $bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', '');
    $query = "DELETE FROM OUTILS WHERE APPID = $id";
    $bdd->exec($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page avec bordure bleue</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container2">
        <h1 class="center">Bienvenue dans votre boîte à outils</h1>
        <h2 class="center">Intranet de la Fondation Bon Sauveur D'Alby</h2>
    </div>
    <div class="cont">
        <?php
        $id = $_GET['id']; // Récupère l'identifiant de l'outil envoyé dans la requête GET

        // Effectue la requête SQL pour récupérer les informations détaillées de l'outil
        $bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', '');
        $query = "SELECT * FROM OUTILS WHERE APPID = $id";
        $result = $bdd->query($query);

        // Affiche les informations détaillées
        echo '<div class="info-div">';
        $row = $result->fetch();
        echo '<b>Nom :</b> ' . $row['NOM'] . '<br><br>';
        echo '<b>Date : </b>' . $row['DAT'] . '<br><br>';
        echo '<b>Secteur : </b>' . $row['SECTEUR'] . '<br><br>';
		
		// Ajout Service à l'affichage détaillé
		echo '<b>Service : </b>' . $row['SERVICE'] . '<br><br>';
		
		        echo '<b>Cible : </b>' . $row['CIBLE'] . '<br><br>';
        echo '<b>Prix : </b>' . $row['PRIX'] . '<br><br>';
        echo '<b>Description : </b>' . $row['DESCR'] . '<br><br>';
        echo '<a href="' . $row['SOURC'] . '"><b>Télécharger</b></a><p>';

        // Add delete button
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="appId" value="' . $id . '">';
        echo '<input type="submit" name="deleteBtn" value="Supprimer">';
        echo '</form>';

        echo '</div>';

        // Handle delete button click
        if (isset($_POST['deleteBtn'])) {
            $appId = $_POST['appId'];
            deleteApplication($appId);
            echo '<div class="info-div">L\'application a été supprimée de la base de données.</div>';
        }
        ?>
    </div>
</body>
</html>
