<?php include('header.php');?>
<?php include('menu.php');?>
<div class="form">
  <h1>Enregistrez vos Menu</h1>
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
  </div>
<?php include('footer.php');?>
