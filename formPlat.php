  <?php include('header.php');?>
    <?php include('menu.php');?>
    <div class="form">
    <h1>Enregistrez vos Plats</h1>
    <form class="plats" action="traitementPlat.php" method="post">
      <p><label class="plat" for="plat">Entrez le nom de votre plat:</label><input type="text" name="plat" value="" autofocus></p>
      <p><label class="prix" for="prix">Entrez le prix de votre plat:</label><input type="text" name="prix" value=""></p>
        <p><label for="image">ajouter une photo</label><input type="file" name="image" value="" id="image"></p>
        <p><label  for="">Valider votre Ajout</label><input type="hidden" name="MAX_FILE_SIZE" value="1048576"/><input class="bouton" type="submit" value="OK"/></p>
      </form>
    </div>
  <?php include('footer.php');?>
