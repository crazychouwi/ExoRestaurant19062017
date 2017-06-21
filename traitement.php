<!-- Récupérer les données du formulaires -->
<?php
$plat = $_POST['plat'];
$prix = $_POST['prix'];
$image = $_POST['url'];
// print($plat." ".$prix." ".$image);
if(empty($plat) OR empty($prix))
    {
    echo '<font color="red">Attention, seul le champs <b>image</b> peut rester vide !</font>';
    }
    else
        {
          // connection a la base'restaurant'
          include('config/connection.php');

          $req = $bdd->prepare('INSERT INTO plat(nom, prix, image) VALUES(:nom, :prix, :image)');

          $req->execute(array(
          'nom' => $plat,
          'prix' => $prix,
          'image' => $image
          ));
          echo " entrer dans la base de données OK!";
          header('Location:listePlat.php');
          exit();
        }
  ?>
