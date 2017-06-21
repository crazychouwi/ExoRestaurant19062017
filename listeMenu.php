<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>listeMenu</title>
  </head>
  <body>
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
  </body>
</html>
