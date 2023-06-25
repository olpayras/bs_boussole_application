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
        <h2>Connexion</h2>
        <form method="POST" action="connexion.php">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe" required><br><br>
            
            <input type="submit" value="Se connecter">
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];
        
            // Effectuer les opérations de vérification en base de données
            // Se connecter à la base de données
            $servername = "localhost";  // Remplacez par votre nom de serveur
            $username = "root"; // Remplacez par votre nom d'utilisateur MySQL
            $password = "root"; // Remplacez par votre mot de passe MySQL
            $dbname = "BONSAUVEUR"; // Remplacez par le nom de votre base de données
        
            // Créer une connexion
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connexion échouée : " . $conn->connect_error);
            }
        
            // Préparer et exécuter la requête de sélection
            $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ? AND mot_de_passe = ?");
            $stmt->bind_param("ss", $email, $mot_de_passe); // Lier deux chaînes de caractères (string)
            $stmt->execute();
        
            // Récupérer le résultat de la requête
            $result = $stmt->get_result();
        
            // Vérifier si l'utilisateur existe et vérifier le mot de passe
            if ($result->num_rows > 0) {
                $_SESSION['utilisateur'] = "True";
                header("Location: ../html/index.php");
                exit();
            } else {
                echo "Mot de passe incorrect ou utilisateur introuvable.";
            }
        
            // Fermer la connexion et libérer les ressources
            $stmt->close();
            $conn->close();
        }
        ?>
        
        <br>
        <a href="inscription.php">S'inscrire</a>
    </div>
</body>
</html>
