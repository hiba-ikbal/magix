<?php
require_once("CommonAction.php");


class LobbyAction extends CommonAction
{

    public function __construct()
    {
        parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
    }
    protected function executeAction()
    {


        // Si le joueur appuie sur le bouton Pratique
        if (!empty($_GET["pratique"])) {
            // API Call
            $data = [];
            $data["key"] = $_SESSION["key"];
            $data["type"] = "TRAINING";

            $result = parent::callAPI("games/auto-match", $data);

            if (
                $result == "INVALID_KEY" ||
                $result == "INVALID_GAME_TYPE" ||
                $result == "DECK_INCOMPLETE" ||
                $result == "MAX_DEATH_THRESHOLD_REACHED"
            ) {

                var_dump($result);
            } else {
                // Pour voir les informations retournées : var_dump($result);exit;
                var_dump($result);
                header("location:game.php");
                exit;
            }
        } else if (!empty($_GET["jouer"])) {

            // API Call
            $data = [];
            $data["key"] = $_SESSION["key"];
            $data["type"] = "PVP";

            $result = parent::callAPI("games/auto-match", $data);

            if (
                $result == "INVALID_KEY" ||
                $result == "INVALID_GAME_TYPE" ||
                $result == "DECK_INCOMPLETE" ||
                $result == "MAX_DEATH_THRESHOLD_REACHED"
            ) {

                var_dump($result);
            } else {
                // Pour voir les informations retournées : var_dump($result);exit;
                var_dump($result);
                header("location:game.php");
                exit;
            }
        }


    }
}
