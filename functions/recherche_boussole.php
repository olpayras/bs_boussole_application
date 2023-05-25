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
        $user_type = $_GET['user_type'];
        $domain = $_GET['domain'];
        $sick_type = $_GET['sick_type'];
        $bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', 'root');

        $query = "SELECT * FROM OUTILS WHERE CIBLE LIKE
        '$user_type' AND SECTEUR LIKE '$domain' AND SERVICE LIKE '$sick_type'";
        $result = $bdd->query($query);

        if ($result->rowCount() == 0) {
            header('Location: ../arbre_html/arbre2_error.php');
            exit();
        } else {
            echo '<div class="cont2">';
            while ($row = $result->fetch()) {
                echo '<div>';
                echo '<a href="detail.php?id=' . $row['APPID'] . '">' . $row['NOM'] . '</a>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
