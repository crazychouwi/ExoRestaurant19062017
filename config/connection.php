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
           // connexion à la base
    $db = mysql_connect('localhost', 'root', 'matt2610')  or die('Erreur de connexion '.mysql_error());
    // sélection de la base

        mysql_select_db('restaurant',$db)  or die('Erreur de selection '.mysql_error());

        // on écrit la requête sql
        $sql = "INSERT INTO plat(idPlat, nom, prix, image) VALUES('','$plat','$prix','$image')";

        // on insère les informations du formulaire dans la table
        mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

        // on affiche le résultat pour le visiteur
        echo 'Vos infos on été ajoutées.';

        mysql_close();  // on ferme la connexion
        }
?>
