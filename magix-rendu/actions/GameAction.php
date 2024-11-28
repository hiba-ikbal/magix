<?php
require_once("actions/CommonAction.php");


class GameAction extends CommonAction
{

    public function __construct()
    {
        parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
    }

    protected function executeAction()
    {

        return [];
    }
}