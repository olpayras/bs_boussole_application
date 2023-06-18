<?php
include "../html/header.php";
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
    $bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');
    $query = "SELECT * FROM OUTILS WHERE APPID = $id";
    $result = $bdd->query($query);

    // Affiche les informations détaillées
    echo '<div class="info-div">';
    $row = $result->fetch();
    echo '<b>Nom :</b> ' . $row['NOM'] . '<br><br>';
    echo '<b>Date : </b>' . $row['DAT'] . '<br><br>';
    echo '<b>Secteur : </b>' . $row['SECTEUR'] . '<br><br>';
    echo '<b>Cible : </b>' . $row['CIBLE'] . '<br><br>';
    echo '<b>Prix : </b>' . $row['PRIX'] . '<br><br>';
    echo '<b>Description : </b>' . $row['DESCR'] . '<br><br>';
    echo '<a href=' . $row['SOURC'] .'><b>Télécharger</b></a>';
    echo '</div>';
    ?></div>
</body>
</html>
