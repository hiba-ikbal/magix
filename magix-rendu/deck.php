<!-- entry point page  squelette du site utilise du code php pour inserer les infos a partir de la bd-->
<?php
require_once("actions/DeckAction.php");

$action = new DeckAction();
$data = $action->execute();
require_once("partials/header.php");

?>

  
    <div class="deck-page">
       

    <iframe class="secondIframe" style="
    width:99%; height:99%" src="https://magix.apps-de-cours.com/server/deck/<?php echo $_SESSION["key"] ?>">
    </iframe>
    <!-- checker pq il reconnait pas le css apres  -->

        
    </div>

    <?php
	require_once("partials/footer.php");
