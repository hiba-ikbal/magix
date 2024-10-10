<!-- lobby page -->
<?php
require_once("actions/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();
require_once("partials/header.php");

?>







<?php
	require_once("partials/footer.php");