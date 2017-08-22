<?php include('header.php'); ?>
<?php include('menu.php'); ?>
  <h1>Votre Menu</h1>
  <div class="contenu">
    <h1>Menu choisi</h1>
    <form method="POST" action="traitementMenuPlat.php">
    <?php
    // Connection à la base
    include("config/connection.php");

    $idMenu = $_GET['idMenu'];
    $reponse = $bdd->query('SELECT * FROM menu WHERE idMenu = "'.$idMenu.'"');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
      echo "<div class='menu'>
      <p>
      ".$donnees["nom"]." ".$donnees["prix"]."€</p></div>
      <input type='hidden' name='idMenu' value='".$idMenu."'>";
    };
    ?>
  </div>
<h1>Cochez les plats que vous désirez:</h1>
<?php
// Connection à la base
include("config/connection.php");

$reponse = $bdd->query('SELECT * FROM plat');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
  echo '
    <div>
      <input type="checkbox" id="checkbox" name="dbox[]" value="'.$donnees['idPlat'].'">
      <label for="checkbox">'.$donnees['nom'].'</label>
    </div>';
};
?>
<button type="submit">Valider</button>
</form>
<?php include('footer.php'); ?>
