<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'ajout de Plats </title>
  </head>
  <body>
    <header>
      <h1>Enregistrez vos Plats</h1>
    </header>
    <div class="form">
      <form class="plats" action="connection.php" method="post">
        <p><label class="plat" for="plat">Entrez le nom de votre plat:</label><input type="text" name="plat" value="" autofocus></p>
        <p><label class="prix" for="prix">Entrez le prix de votre plat:</label><input type="text" name="prix" value=""></p>
        <p><label class="image" for="">Entrez le nom de votre image ici:</Label><input type="text" name="url" value=""></p>
        <p><label  for="">Valider votre Ajout</label><input class="bouton" type="submit" value="OK"></p>
      </form>
    </div>
  </body>
</html>
