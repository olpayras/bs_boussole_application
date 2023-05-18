<?php
include "header.php"
?>

<!DOCTYPE html>
<meta charset="utf-8">
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
	<div class="container3" onclick="window.location.href='../arbre_html/arbre1.php'">
		<img src="../images/boussole.png">
	</div>
	<div class="container4">
		<img src="../images/example_start_page.png">
	</div>
	<div class="container_filter">
		<div class="filter">
			<button id="filter-button">Filtrer</button>
			<div id="filter-options">
			  <label><input type="checkbox" name="option1" value="option1">Patient</label>
			  <label><input type="checkbox" name="option2" value="option2">Praticien</label>
			  <label><input type="checkbox" name="option3" value="option3">...</label>
			</div>
		  </div>		  
	</div>
	<div class="container3">
		<img src="../images/example_start_page2.png">
	</div>
	<div class="container4">
		<img src="../images/example_start_page3.png">
	</div>
	<div class="container4">
		<img src="../images/example_start_page4.png">
	</div>

	<script src="../functions/main.js"></script>
</body>

</html>