<?php
require_once("actions/CommonAction.php");

class LogoutAction extends CommonAction
{

    public function __construct()
    {
        parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
    }

    protected function executeAction()
    {

        $result = null;
        if (isset($_SESSION["key"])) {
            $data = [];
            $data["key"] = $_SESSION["key"];
            //apl api pour se deco
            $result = parent::callAPI("signout", $data);
            if ($result == "SIGNED_OUT") {
                session_destroy(); // Détruire la session
                header("Location: index.php"); // Rediriger vers la page d'accueil
                exit();
            }
        } else {
            // Pas de session active, rediriger vers la page d'accueil
            header("Location: index.php");
            exit();
        }
    }
}
