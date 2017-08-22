<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ajout plats/menus</title>
  </head>
  <body>
    <h1>les menus</h1>

    <div class="choixmenu">
    <h3>Choississez le menu:</h1>
        <select name="id" size="1">
          <?php
          include("config/connection.php");

          $reponse = $bdd->query('SELECT * FROM menu');
          while ($donnees = $reponse->fetch())
           {
             echo "<option value='".$donnees["id"]."'>".$donnees["nom"]."</option>";
           };
         ?>
      </select>
    </div>

      <div class="choixplat">
        <h3>Choississez le plat à ajouter au menu:</h1>
      <select name="id" size="0">
        <?php
        include("config/connection.php");

        $reponse = $bdd->query('SELECT * FROM plat');
        while ($donnees = $reponse->fetch())
           {
             echo "<option value='".$donnees["id"]."'>".$donnees["nom"]."</option>";
           };
        ?>
      </select>
    </div>
  </body>
</html>
