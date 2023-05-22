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
    <div class="container_arbre1">
        <h2>L'utilisateur de cette application est : </h2>
        <div class="checkboxes">
          <input type="checkbox" id="checkbox1" name="checkbox1">
          <label for="checkbox1">Patient</label>
          <br>
          <input type="checkbox" id="checkbox2" name="checkbox2">
          <label for="checkbox2">Praticien</label>
        </div>
        <button class="next-btn">Next</button>
      </div>
      
	<script src="./functions/main.js"></script>
</body>

</html>