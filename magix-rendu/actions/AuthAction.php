<?php
require_once("actions/CommonAction.php");

class AuthAction extends CommonAction
{

    public function __construct()
    {
        parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
    }

    protected function executeAction()
    {
        //      //si l'utilisateur veut se deco
        //     if (isset($_POST["action"]) && $_POST["action"] === "logout") {
        //     return $this->logout();
        //     }
        // }

        //private function signin(){    

        $user = null;
        $hasConnectionError = false;
        $data = [
            "errorMessage" => null,
            "successMessage" => null
        ];

        if (isset($_POST["username"]) && isset($_POST["pwd"])) {

            $data["username"] = $_POST["username"];
            $data["password"] = $_POST["pwd"];

            $result = parent::callAPI("signin", $data);

            if ($result == "INVALID_USERNAME_PASSWORD") {
                $hasConnectionError = true;
                $data["errorMessage"] = "Nom d'utilisateur ou mot de passe invalide";
            } else {
                // Pour voir les informations retournées : var_dump($result);exit;
                $key = $result->key;
                $_SESSION["key"] = $key;
                $_SESSION["username"] = $data["username"];

                $data["successMessage"] = "Connexion reussi!";

                header("location:lobby.php");
                exit;
            }

        }
        return $data;

      
    }

}

