<?php
//connection a la base de données
  include('config/connection.php');

  $idMenu = $_POST['idMenu'];
  $idMenu = intval($idMenu);

  foreach($_POST["dbox"] as $idPlat){
    $idPlat = intval($idPlat);

    $req = $bdd->prepare('INSERT INTO plats_menu(id_menu, id_plat) VALUES(:id_menu, :id_plat)');

    $req->execute(array(
      'id_menu' => $idMenu,
      'id_plat' => $idPlat
    ));
  }
header('location:lesMenus.php');
exit;


 ?>
