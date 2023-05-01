<!DOCTYPE html>
<html>
<head>
	<title>Affichage de la base de données avec filtres</title>
</head>
<body>
	<h1>Affichage de la base de données avec filtres</h1>

	<form method="GET">
	    <!-- Filtre pour le cible -->
	    <label for="cible">Cible :</label>
	    <select id="cible" name="cible">
		    <option value="">Tous</option>
		    <option value="Patient">Patient</option>
		    <option value="Praticien">Praticien</option>
	    </select>
        <input type="submit" value="Filtrer">
	</form>

	<?php
		// Connexion à la base de données
		$connexion = mysqli_connect("localhost", "root", "", "BONSAUVEUR");

		// Vérification de la connexion
		if (!$connexion) {
			die("Connection failed: " . mysqli_connect_error());
		}

        $cible=$_GET["cible"];
		// Construction de la requête SQL avec filtres
		$sql = "SELECT * FROM OUTILS";
		if (!empty($_GET["cible"])) {
			$sql .= " WHERE cible='" . $_GET["cible"] . "'";
		}

		// Exécution de la requête SQL
		$resultat = mysqli_query($connexion, $sql);

		// Affichage des résultats
		if (mysqli_num_rows($resultat) > 0) {
			echo "<table>";
			echo "<tr><th>Nom</th><th>Offre de Soin</th><th>Cible</th></tr>";
			while ($row = mysqli_fetch_assoc($resultat)) {
				echo "<tr><td>" . $row["NOM"] . "</td><td>" . $row["OFFRESOIN"] . "</td><td>" . $row["CIBLE"] . "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Aucun résultat trouvé.";
		}

		// Fermeture de la connexion à la base de données
		mysqli_close($connexion);
	?>
</body>
</html>

