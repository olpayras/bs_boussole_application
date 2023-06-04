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
    $row = $result->fetch();
    echo '<b>' . $row['NOM'] . '</b><br>';
    echo 'Description : ' . $row['DESCR'] . '<br>';
    echo '<a href=' . $row['SOURC'] .'>Télécharger</a>';
    // Ajoutez d'autres champs à afficher selon votre structure de base de données
    ?></div>
</body>
</html>
