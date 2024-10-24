<?php
require_once("CommonAction.php");


class LobbyAction extends CommonAction {
    
    public function __construct() {
        parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
    }
    protected function executeAction() {

        $text = "text d'entree"; // or whatever logic you need

        return compact("text");
    }
}
