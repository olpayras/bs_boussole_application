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
    <div class="cont"><?php
include "../html/header.php";
$service = $_GET['service']; // Récupère la valeur du paramètre "service" envoyé dans la requête GET

// Effectue la connexion à la base de données (vous devez configurer les paramètres de connexion appropriés)
$bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');

// Effectue la requête SQL pour récupérer les outils correspondants
$query = "SELECT * FROM OUTILS WHERE SERVICE LIKE '%$service%'";
$result = $bdd->query($query);

echo '<div class="cont2">';
while ($row = $result->fetch()) {
    echo '<div>';
    echo '<a href="detail.php?id=' . $row['APPID'] . '">' . $row['NOM'] . '</a>';
    echo '</div>';
    }
echo '</div>';
?></div></body></html>