<!-- lobby page -->
<?php
require_once("actions/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();
require_once("partials/header.php");

?>

<body>

 <div class="lobby">
    <h2>Lobby</h2>
    <p>Bienvenue dans le lobby! Choisissez une option ci-dessous :</p>

    <!-- <form method="post" action="logout.php"> 
   		<input type="hidden" name="action" value="logout">
    	<button type="submit">Quitter</button>

	</form>
	
	
	<form method="post" action="deck.php"> 
   		<input type="hidden" name="action" value="deck">
    	<button type="submit">Modifier deck</button>

	</form>
	<button id="start-game">Jouer</button>
    <button id="start-practice">Pratique</button> -->
	<button><a href="?pratique=true">Pratique</a></button>
            <button><a href="?jouer=true">Jouer</a></button>
            <!-- <button><a href="blog.php?id=1">Blog</a></button> -->
            <button><a href="?logout=true">Quitter</a></button>
	<iframe style="width:700px;height:240px;" onload="applyStyles(this)" 
        src="https://magix.apps-de-cours.com/server/chat/<?php echo $_SESSION["key"] ?>">
</iframe>

</div>




<?php
	require_once("partials/footer.php");