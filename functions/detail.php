<?php
$id = $_GET['id']; // Récupère l'identifiant de l'outil envoyé dans la requête GET

// Effectue la requête SQL pour récupérer les informations détaillées de l'outil
$bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');
$query = "SELECT * FROM OUTILS WHERE APPID = $id";
$result = $bdd->query($query);

// Affiche les informations détaillées
$row = $result->fetch();
echo 'Nom : ' . $row['NOM'] . '<br>';
echo 'Description : ' . $row['DESCR'] . '<br>';
// Ajoutez d'autres champs à afficher selon votre structure de base de données
?>
