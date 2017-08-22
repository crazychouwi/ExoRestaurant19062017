
<?php
include('header.php');
include('menu.php');

// Connection à la base
include("config/connection.php");
// $reponse = $bdd->query('SELECT * FROM `plats_menu`
//   LEFT JOIN plat ON id_plat = `plat`.idPlat
//   LEFT JOIN menu ON id_menu = `menu`.idMenu');
//
// // On affiche chaque entrée une à une
// while ($donnees = $reponse->fetch())
// {
//   echo "<div class='menu'>
//   <p>
//   ".$donnees["nom"]." ".$donnees["prix"]."€</p></div>";
// };


$reponseMenu = $bdd->query('SELECT * FROM menu ORDER BY menu.idMenu DESC');
foreach($reponseMenu as $menu){
  echo "<div class='composer'>";

  $platsMenu = $bdd->query('SELECT *  FROM `plats_menu` LEFT JOIN plat ON `plats_menu`.id_plat = `plat`.idPlat WHERE `id_menu` ="'.$menu['idMenu'] . '"');

  echo "<div class='titre'><div>Menu : " . $menu['nom'] . "</div><div>Prix : " . $menu['prix'] . '€' . " </div></div>";
  $plats = $platsMenu;
    foreach($plats as $plat){
      echo "<p>Plat : " . $plat['nom'] . " </p>";
    }
    echo "<div class='bouton'><button class='update'>modifier</button><a href='supprimerMenu.php?del=" . $menu['idMenu'] . "'>supprimer</a></div>";
    echo "</div>";
}

// $reponse->closeCursor();
include('footer.php');
?>
