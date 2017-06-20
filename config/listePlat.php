<!-- Afficher tous les plats -->
<html>
	<head>
	<title>liste des plats </title>
	<link rel="stylesheet" href="/config/style1.css">
	</head>
	<body>
<header>
	<!-- <h1>Liste des Plats</h1> -->
</header>
<div class="contenu">

	<?php
	// Connection à la base
	include("config/connection.php");

	// Selection de la base
	mysql_select_db("restaurant") or die(mysql_error());

	// requete SQL
	$strSQL = "SELECT * FROM plat";

	// Execute la requete (la variable $ contient le résultat)
	$resultat = mysql_query($strSQL);

	//boucle dans la colonne 'nom' et récupère chaque résultat
	while($colonne = mysql_fetch_array($resultat)) {

	   // Ecrit la valeur de la colonne 'nom'
	  echo $colonne['nom'] . "<br />";

	  }

	// Close the database connection
	mysql_close();
	?>
</div>
	</body>
	</html>
