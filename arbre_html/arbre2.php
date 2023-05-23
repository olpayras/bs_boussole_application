<!DOCTYPE html>
<?php
include "../html/header.php";
?>
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
    <div class="container_arbre1">
        <h2>Le domaine de cette application est :</h2>
        <div class="checkboxes">
            <form action="./arbre3.php" method="GET">
                <input type="hidden" name="user_type" value="<?php echo $_GET['user_type']; ?>">
                <input type="radio" id="checkbox1" name="domain" value="sanitaire">
                <label for="checkbox1">Sanitaire</label>
                <br>
                <input type="radio" id="checkbox2" name="domain" value="medico-social">
                <label for="checkbox2">Médico-Social</label>
                <br>
                <button type="submit" class="next-btn">Next</button>
            </form>
        </div>
    </div>
    
    <script src="./functions/main.js"></script>
</body>
</html>
