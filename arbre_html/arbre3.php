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
            <form action="../functions/recherche_boussole.php" method="GET">
                <input type="hidden" name="user_type" value="<?php echo $_GET['user_type']; ?>">
                <input type="hidden" name="domain" value="<?php echo $_GET['domain']; ?>">
                <input type="radio" id="checkbox1" name="sick_type" value="Psychiatrie">
                <label for="checkbox1">Psychiatrie</label>
                <br>
                <input type="radio" id="checkbox2" name="sick_type" value="Addiction">
                <label for="checkbox2">Addiction</label>
                <br>
                <input type="radio" id="checkbox3" name="sick_type" value="Autisme">
                <label for="checkbox3">Autisme</label>
                <br>
                <input type="radio" id="checkbox4" name="sick_type" value="Handicap">
                <label for="checkbox4">Handicap</label>
                <br>
                <button type="submit" class="next-btn">Next</button>
            </form>
        </div>
    </div>
    
    <script src="./functions/main.js"></script>
</body>
</html>