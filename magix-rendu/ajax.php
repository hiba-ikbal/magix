<?php
require_once("actions/AjaxAction.php");

$action = new AjaxAction();
$data = $action->execute();

// Renvoi de la réponse au format JSON
echo json_encode($data["result"]);
