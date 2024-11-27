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
<script type="module" src="js/game.js"></script>
<link rel="stylesheet" href="Style/styles.css?v=<?php echo time(); ?>">

<?php
require_once("actions/GameAction.php");

$action = new GameAction();
$data = $action->execute();
require_once("partials/header.php");

?>
<!-- statut du jeu pour dire si c'est ton tour ou celui de l'ennemi avec btn retour au lobby -->

<!-- details de l'ennemi  -->
<section id="enemy-section">
    <div id="enemy-cards-container"></div>
    <div id="enemy-details">
        <div class="enemy-profile-container">
            <!-- <img id="enemy-avatar" alt="Enemy photo"/> -->
            <div class="enemy-user"></div>
        </div>
        <div class="enemy-hp-mp-container">
            <div class="enemy-hp"></div>
            <div class="enemy-mp"></div>
        </div>
    </div>
    <div class="enemy-remaining-cards-container">
        <img src="assets/img1.png" alt="Card Remaining" />
        <div id="enemy-remaining-cards-qty"></div>
    </div>
</section>
  <!-- details du player -->
  <section id="player-section">
    <div id="player-details">
        <div class="player-remaining-cards-container">
            <img src="assets/img1.png" alt="Player remaining cards">
            <div class="player-remaining-cards"></div>
        </div>
        <div class="player-hp-mp-container">
            <div class="player-hp"></div>
            <div class="player-mp"></div>
        </div>
    </div>
    <div id="player-cards-container"></div>
    <div class="player-actions-container">
        <button id="hero-power">Hero Power</button>
        <h3 id="remaining-turn-time">Remaining turn time</h3>
        <h3 id="your-turn"></h3>
        <button id="end-turn">End Turn</button>
    </div>
</section>
<template id="cards-template">
    <img class="card-template-photo"/>
    <h2></h2>
    <div id="cards-template-stats-container">
        <div class='attack'></div>
        <div class='hp'></div>
        <div class='cost'></div>
    </div>
    <div class='mechanics'></div>
</template>



    <?php
	require_once("partials/footer.php");
