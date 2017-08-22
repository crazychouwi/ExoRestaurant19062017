
  <?php include('header.php');?>
  <?php include('menu.php');?>
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
  <?php include('footer.php');?>
