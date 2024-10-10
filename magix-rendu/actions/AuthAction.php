<?php
    require_once("actions/CommonAction.php");

    class AuthAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
        $user = null;
        $hasConnectionError = false;
			
        if(isset($_POST["username"]) && isset($_POST["pwd"])){
            $data = [];
            $data["username"] = $_POST["username"];
            $data["password"] = $_POST["pwd"];

            $result = parent::callAPI("signin", $data);

            if ($result == "INVALID_USERNAME_PASSWORD") {
	        // err
            $hasConnectionError = true;
            }
        else {
	    // Pour voir les informations retournées : var_dump($result);exit;
	    $key = $result->key;
        $_SESSION["key"] = $key;
        $_SESSION["username"] = $data["username"];
        header("location:lobby.php");
        return $data;
        }

        }
        
    }
}
//ensure to always provide feedback to the user
//return [
//     "errorMessage" => $hasConnectionError ? "Nom d'utilisateur ou mot de passe invalide." : null,
//     "successMessage" => !$hasConnectionError ? "Connexion réussie!" : null,
// ];