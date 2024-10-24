<?php
    require_once("actions/CommonAction.php");
    //require_once("actions/DAO/RulesDAO.php");

    class GameAction extends CommonAction {



        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $text = "text d'entree"; // or whatever logic you need

            return compact("text");
        }
    }

    //Make sure RulesDAO::getIndexText() correctly handles cases where there are no rules to display.
    