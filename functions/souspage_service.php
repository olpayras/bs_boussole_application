<?php
$service = $_GET['service']; // Récupère la valeur du paramètre "service" envoyé dans la requête GET

// Effectue la connexion à la base de données (vous devez configurer les paramètres de connexion appropriés)
$bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');

// Effectue la requête SQL pour récupérer les outils correspondants
$query = "SELECT * FROM OUTILS WHERE SERVICE LIKE '%$service%'";
$result = $bdd->query($query);

// Affiche les résultats
while ($row = $result->fetch()) {
    echo '<a href="detail.php?id=' . $row['APPID'] . '">' . $row['NOM'] . '</a><br>';
}
?>