<?php
include "header.php"
?>

<!DOCTYPE html>
<meta charset="utf-8">
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
	<div class="container3" onclick="window.location.href='../arbre_html/arbre1.php'">
		<img src="../images/boussole.png">
	</div>
	<div class="cont"><?php

// Effectue la connexion à la base de données (vous devez configurer les paramètres de connexion appropriés)
$bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');

// Effectue la requête SQL pour récupérer les outils correspondants
$query = "SELECT * FROM OUTILS LIMIT 3";
$result = $bdd->query($query);
$count = 0;

echo '<div class="cont2">';
  while ($row = $result->fetch()) {
    echo '<div>';
    echo '<a href="../functions/detail.php?id=' . $row['APPID'] . '"><b>' . $row['NOM'] . '</b></a>';
    $description = $row['DESCR'];
    $limit = 100; // Limite de caractères
    if (strlen($description) > $limit) {
      $description = substr($description, 0, $limit) . '...';
    }
    echo '<p><b>Description :</b> ' . $description . '</p>';
    echo '</div>';
  }
echo '</div>';?>
<br><br>

</body>

</html>