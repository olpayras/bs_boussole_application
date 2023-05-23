<?php
$user_type = $_GET['user_type']; // Récupère la valeur du paramètre "nom" envoyé dans la requête GET
$domain = $_GET['domain'];
$sick_type = $_GET['sick_type'];
// Effectue la connexion à la base de données (vous devez configurer les paramètres de connexion appropriés)
$bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');

// Effectue la requête SQL pour récupérer les outils correspondants
$query = "SELECT * FROM OUTILS WHERE CIBLE LIKE '$user_type' AND SECTEUR LIKE '$domain' AND SERVICE LIKE '$sick_type'";
$result = $bdd->query($query);

// Affiche les résultats
if ($result->rowCount()==0) {
    header('Location: ../arbre_html/arbre2_error.php');
    exit();
}else {
    while ($row = $result->fetch()) {
        echo '<a href="detail.php?id=' . $row['APPID'] . '">' . $row['NOM'] . '</a><br>';
    }
}
?>