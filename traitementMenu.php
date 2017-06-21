<!-- Récupérer les données du formulaires -->
<?php
$menus = $_POST['menus'];
$prix = $_POST['prix'];
// print($plat." ".$prix." ".$image);
if(empty($menus) OR empty($prix))
    {
    echo '<font color="red">Attention vous avez oubliez un champs!</font>';
    }
    else
        {
          // connection a la base'restaurant'
          include('config/connection.php');

          $req = $bdd->prepare('INSERT INTO menu(nom, prix) VALUES(:nom, :prix)');

          $req->execute(array(
          'nom' => $menus,
          'prix' => $prix
          ));
          echo "entrer dans la base de données OK!";
          header('Location:listeMenu.php');
          exit();
        }
  ?>
