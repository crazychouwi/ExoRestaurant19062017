  <?php include('header.php');?>
	<?php include('menu.php');?>
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
			<p>".$donnees["nom"]." ".$donnees["prix"]."€</p>"."</p>
			</div>";
		};
		?>
	</div>
  <?php include('footer.php');?>
