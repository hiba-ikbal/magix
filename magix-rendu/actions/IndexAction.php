<?php
    require_once("actions/CommonAction.php");

    class IndexAction extends CommonAction {



        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $text = "text d'entree"; 

            return compact("text");
        }
    }

    