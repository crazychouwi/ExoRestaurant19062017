<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/listeMenu.css">
    <title>listeMenu</title>
  </head>
  <body>
    <div class="contenu">
    <?php
    // Connection à la base
    include("config/connection.php");

    $reponse = $bdd->query('SELECT * FROM menu');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
      {
      echo "<div class='menu'>
      <p>
      ".$donnees["nom"]." ".$donnees["prix"]."€</p></div>";
      };
      ?>
    </div>
  </body>
</html>
