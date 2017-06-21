<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Ajout Menus </title>
  </head>
  <body>
    <header>
      <h1>Enregistrez vos Menu</h1>
    </header>
    <div class="form">
      <form class="plats" action="traitementMenu.php" method="post">
        <p>
          <label class="menu" for="menu">Entrez le nom de votre menu:</label>
          <input type="text" name="menus" autofocus>
        </p>
        <p>
          <label class="prix" for="prix">Entrez le prix de votre menu:</label>
          <input type="text" name="prix">
        </p>
        <p>
          <label  for="">Valider votre Ajout</label>
          <input class="bouton" type="submit" value="OK">
        </p>
      </form>
    </div>
  </body>
</html>
