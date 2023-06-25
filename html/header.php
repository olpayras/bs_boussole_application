<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="bandeau">
    <div class="petit-bandeau">
        <a href="../html/index.php">
            <img class="petit-bandeau-logo" src="../images/logo_bs.png">
        </a>
    </div>
    <div class="reference">
        <br>
        <form action="../functions/rechercher.php" method="GET">
            <input type="search" name="nom" class="recherche" placeholder="Recherche Application">
            <input type="submit" value="Rechercher">
        </form>
        <nav class="nav">
            <ul>
                <li class="dropdown">
                    <a href="#">Services &#9662;</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-compo"><a style="color: white"
                        href="../functions/souspage_service.php?service=Psychiatrie">Psychiatrie</a></li>
                        <li class="dropdown-compo"><a style="color: white"
                        href="../functions/souspage_service.php?service=Handicap">Handicap</a></li>
                        <li class="dropdown-compo"><a style="color: white"
                        href="../functions/souspage_service.php?service=Autisme">Autisme</a></li>
                        <li class="dropdown-compo"><a style="color: white"
                        href="../functions/souspage_service.php?service=Addiction">Addiction</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <br><br><br>
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="#">Catégories &#9662;</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-compo"><a style="color: white"
                         href="../functions/souspage_categ.php?categ=Sanitaire">Sanitaire</a></li>
                        <li class="dropdown-compo"><a style="color: white"
                        href="../functions/souspage_categ.php?categ=Médico-Social">Médico-Social</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="connexion" style="text-align: right; margin-top: 10px;">
    <p>
    <?php
    session_start();

    if (isset($_SESSION['utilisateur'])) {
        echo "Vous êtes connecté";
        echo '<a href="../functions/ajouter.php"><p>Ajouter Application</a>';
    } else {
        echo '<a href="../logs/connexion.php">Connexion</a>';
    }
    ?>
</div>
</body>
</html>
