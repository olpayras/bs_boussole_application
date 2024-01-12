<?php
include "../html/header.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container2">
        <h1 class="center">Bienvenue dans votre boîte à outils</h1>
        <h2 class="center">Intranet de la Fondation Bon Sauveur D'Alby</h2>
    </div>
    <div class='cont'>
    <h2>Inscription</h2>
    <form method="POST" action="inscription.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required><br><br>
        
        <input type="submit" value="S'inscrire">
    </form>
    
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Effectuer les opérations d'insertion en base de données
    // Se connecter à la base de données
    $servername = "localhost";  // Remplacez par votre nom de serveur
    $username = "root"; // Remplacez par votre nom d'utilisateur MySQL
    $password = ""; // Remplacez par votre mot de passe MySQL
    $dbname = "BONSAUVEUR"; // Remplacez par le nom de votre base de données

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nom, $email, $mot_de_passe);
    $stmt->execute();

    // Vérifier si l'insertion a réussi
    if ($stmt->affected_rows > 0) {
        header("Location: ../html/index.php");
        exit();
    } else {
        echo "Erreur lors de l'inscription.";
    }

    // Fermer la connexion et libérer les ressources
    $stmt->close();
    $conn->close();
}
?></div>

</body>
</html>
