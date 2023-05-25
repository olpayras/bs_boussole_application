<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="bandeau">
    <div class="petit-bandeau">
        <img class="petit-bandeau-logo" src="../images/logo_bs.png">
    </div>
    <div class="reference">
        <br>
        <form action="../functions/rechercher.php" method="GET">
            <input type="search" name="nom" class="recherche" placeholder="Recherche Application">
            <input type="submit" value="Rechercher">
        </form>
    </br>
        <nav class="nav">
            <ul>
                <li class="dropdown">
                    <a href="#">Services &#9662;</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-compo"><a style="color: black"
                        href="../functions/souspage_service.php?service=Psychiatrie">Psychiatrie</a></li>
                        <li class="dropdown-compo"><a style="color: black"
                        href="../functions/souspage_service.php?service=Handicap">Handicap</a></li>
                        <li class="dropdown-compo"><a style="color: black"
                        href="../functions/souspage_service.php?service=Autisme">Autisme</a></li>
                        <li class="dropdown-compo"><a style="color: black"
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
                        <li class="dropdown-compo"><a style="color: black"
                         href="../functions/souspage_categ.php?categ=Sanitaire">Sanitaire</a></li>
                        <li class="dropdown-compo"><a style="color: black"
                        href="../functions/souspage_categ.php?categ=Médico-Social">Médico-Social</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
</body>
</html>