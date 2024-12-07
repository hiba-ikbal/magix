<!-- lobby page -->
<?php
require_once("actions/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();
require_once("partials/header.php");

?>
 <script src="./js/scripts.js"></script>

<div class="lobby-container">
<div class="dialogue-box">
    <div class="character-portrait">
        <img src="./assets/dumbledor-icon.jpg" alt="Dumbledore" />
    </div>
    <div class="dialogue-content">
        <p id="dialogue-text">
            "Welcome to the Wizarding World! Choose your path wisely: Practice your spells, challenge a rival, or customize your deck."
        </p>
    </div>
</div>


        <!-- Cards as Navigation -->
        <div class="card-selection">
        <div class="card" onclick="window.location.href='?pratique=true'">
        <div class="card-front">
            <h2>Pratique</h2>
        </div>
    </div>

    <div class="card" onclick="window.location.href='?jouer=true'">
    <div class="card-front">
            <h2>Jeu</h2>
        </div>
    </div>

    <div class="card" onclick="window.location.href='deck.php'">
    <div class="card-front">
            <h2>Deck</h2>
        </div>
    </div>
            </div>

	<iframe allowtransparency="true" style="background: #FFFFFF;width:100%;height:240px;"  onload="applyStyles(this)" 
        src="https://magix.apps-de-cours.com/server/chat/<?php echo $_SESSION["key"] ?>">
</iframe>


</div>
<!-- code pour la ideo du lobby est un codepen https://codepen.io/cgorton/pen/aPrKwY modifie pour fit le jeu :) -->


<?php
	require_once("partials/footer.php");

	