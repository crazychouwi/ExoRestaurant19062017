<!-- Afficher tous les plats -->
<html>
	<head>
	<title>liste des plats </title>
	<link rel="stylesheet" href="assets/css/listePlat.css">
	</head>
	<body>
<header>
	<!-- <h1>Liste des Plats</h1> -->
</header>
<h1>Nos plats</h1>
	<div class="contenu">
		<?php
		// Connection à la base
		include("config/connection.php");

		$reponse = $bdd->query('SELECT * FROM plat');

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
			{
		  echo "<div class='plat'>
			<p>
			".$donnees["nom"]." ".$donnees["prix"]."€</p>"."<p>".$donnees["image"]."
			</p>
			</div>";
			};
			?>
		</div>
	</body>
	</html>
