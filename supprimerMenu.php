<?php
include("config/connection.php");

$del = $_GET['del'];

$requete = $bdd->prepare('DELETE FROM `plats_menu` WHERE id_menu=:id_menu');
$requete->bindParam(':id_menu',$del);
$requete->execute();

$requete = $bdd->prepare('DELETE FROM `menu` WHERE idMenu=:idMenu');
$requete->bindParam(':idMenu',$del);
$requete->execute();

header('location:lesMenus.php?idMenu='.$idMenu.'');
 ?>
