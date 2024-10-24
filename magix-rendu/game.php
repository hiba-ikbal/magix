<!-- game page -->
<!-- 
    Create a class to manage the overall game state (e.g., Game.php).
    This class should handle player turns, health points, and the current state of the board.
    Create a Card class to represent each card in the game, with properties like name, type, state, attack, health, and any special abilities (like taunt, stealth, etc.).
    Game Logic:
    Implement turn management to alternate between players(50s chac?)
    Use a timer (e.g., JavaScript with setTimeout) to track the turn time.


    Card Actions:
    Define methods in the Game class to handle card actions such as:
    Playing a card
    Attacking with a card
    Using special abilities (battlecry, deathrattle)
    Ending a turn
-->
<!-- entry point page  squelette du site utilise du code php pour inserer les infos a partir de la bd-->
<?php
require_once("actions/GameAction.php");

$action = new GameAction();
$data = $action->execute();
require_once("partials/header.php");

?>

  
<div class="game-page">
    <h2>Jeu en cours</h2>
    <div id="game-state"></div>
    <button id="end-turn">Terminer le tour</button>
</div>

    <?php
	require_once("partials/footer.php");
