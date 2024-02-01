<?php
include "../html/header.php";

// Function to add a new application to the database
function addApplication($data)
{
    $bdd = new PDO('mysql:host=localhost;dbname=BONSAUVEUR', 'root', '');
    $query = "INSERT INTO OUTILS (NOM, OFFRESOIN, SECTEUR, SERVICE, CIBLE, NBCIBLE, DESCR, PRIX, DAT, OS, SECUR, SOURC, CATEG)
              VALUES (:nom, :offreSoin, :secteur, :service, :cible, :nbCible, :descr, :prix, :dat, :os, :secur, :sourc, :categ)";
    $stmt = $bdd->prepare($query);
    $stmt->execute($data);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array(
        'nom' => $_POST['nom'],
        'offreSoin' => $_POST['offreSoin'],
        'secteur' => $_POST['secteur'],
		'service' => $_POST['service'],
        'cible' => $_POST['cible'],
        'nbCible' => $_POST['nbCible'],
        'descr' => $_POST['descr'],
        'prix' => $_POST['prix'],
        'dat' => $_POST['dat'],
        'os' => $_POST['os'],
        'secur' => $_POST['secur'],
        'sourc' => $_POST['sourc'],
        'categ' => $_POST['categ'],
    );

    // Add the application to the database
    addApplication($data);
    echo '<div class="info-div" style="position: fixed; bottom: 20px; right: 20px; text-align: right;">L\'application a été ajoutée à la base de données.</div>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une application</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container2">
        <h1 class="center">Ajouter une application</h1>
        <h2 class="center">Intranet de la Fondation Bon Sauveur D'Alby</h2>
    </div>
    <div class="cont">
        <div class="info-div">
        <form method="post" action="">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="offreSoin">Offre de soin :</label>
    <input type="text" id="offreSoin" name="offreSoin" required><br><br>

    <label for="secteur">Secteur :</label>
    <select id="secteur" name="secteur" required>
        <option value="Médico-social">Médico-social</option>
        <option value="Sanitaire">Sanitaire</option>
    </select><br><br>

// Ajout Service lors de la ajout d'une nouvelle appli

	<label for="service">Service :</label>
    <select id="service" name="service" required>
        <option value="Psychiatrie">Pychiatrie</option>
        <option value="Addiction">Addiction</option>
		<option value="Autisme">Autisme</option>
        <option value="Handicap">Handicap</option>
    </select><br><br>

    <label for="cible">Cible :</label>
    <select id="cible" name="cible" required>
        <option value="Patient">Patient</option>
        <option value="Praticien">Praticien</option>
        <option value="Praticien & Patient">Praticien & Patient</option>
    </select><br><br>

    <label for="nbCible">Nombre de cibles :</label>
    <input type="number" id="nbCible" name="nbCible" required><br><br>

    <label for="descr">Description :</label>
    <textarea id="descr" name="descr" required></textarea><br><br>

    <label for="prix">Prix :</label>
    <input type="text" id="prix" name="prix" required><br><br>

    <label for="dat">Date :</label>
    <input type="text" id="dat" name="dat" required><br><br>

    <label for="os">Système d'exploitation :</label>
    <select id="os" name="os" required>
        <option value="Android">Android</option>
        <option value="IOS">IOS</option>
        <option value="Android & IOS">Android & IOS</option>
        <option value="WEB">WEB</option>
    </select><br><br>

    <label for="secur">Sécurité :</label>
    <input type="text" id="secur" name="secur" required><br><br>

    <label for="sourc">Source :</label>
    <input type="text" id="sourc" name="sourc" required><br><br>

    <label for="categ">Catégorie :</label>
    <select id="categ" name="categ" required>
        <option value="Périnatalité">Périnatalité</option>
        <option value="Enfants">Enfants</option>
        <option value="Adolescents">Adolescents</option>
        <option value="Adultes">Adultes</option>
        <option value="Personnes Agées">Personnes Agées</option>
        <option value="Psycho-Oncologie">Psycho-Oncologie</option>
    </select><br><br>

    <input type="submit" value="Ajouter">
</form>

        </div>
    </div>
</body>
</html>
