<?php
require_once("actions/GameAction.php");

$action = new GameAction();
$data = $action->execute();

require_once("partials/header.php");
?>

<script defer src="./js/game.js"></script>
<body>
<div id="game" >

  <!-- enemy Section -->
  <div id="section-top" >
    <div id="info-panel" >
      <div id="info-item" ></div>
      <div id="enemy" ></div>
      <div id="enemyHP" ></div>
      <div id="enemyMana" ></div>
      <div id="remainingCardsEnemy"></div>
    </div>
    <div id="enemyIcon" class="icon-style"></div>
    <div id="enemyCards" class="cards-container"></div>
  </div>

  <!-- Board Section -->
  <div id="board" class="board-layout">
    <div id="info-box">
      <div id="timer" class="timer-container">
        <div id="timerValue"></div>
        <span class="loader"></span>
      </div>
      <div id="turn" class="turn-indicator"></div>
    <div id="message" class="game-message"></div>
    </div>
    <div id="board-section" ></div>
    <div id="boardCardContainer"></div>
    
  </div>

  <!-- Player Section -->
  <div id="player" class="section-bottom">
    <div id="info" class="info-panel">
      <div id="playerIcon" class="icon-style"></div>
      <div id="class"></div>
      <div id="healthBar" class="health-bar">
        <div id="vies">0</div>
      </div>
      <div id="mana"></div>
      <div id="remaining"></div>
    </div>
    <div id="cards" class="cards-container"></div>
    <div id="action-buttons" class="action-controls">
      <button name="heroPower" onclick="heroPower()" type="submit">Hero Power</button>
      <button name="endTurn" onclick="endTurn()" type="submit">End Turn</button>
      <button name="surrender" onclick="surrender()" type="submit">Surrender</button>
      <button id="quitter" name="quitter" onclick="quitGame()" type="submit">Quitter</button>
    </div>
    
  </div>

</div>
<?php
require_once("partials/footer.php");
?>
