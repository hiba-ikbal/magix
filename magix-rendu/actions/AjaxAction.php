<?php
require_once("actions/CommonAction.php");

class AjaxAction extends CommonAction
{
    public function __construct()
    {
        parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
    }

    protected function executeAction()
    {
        $result = "";
        $data = [];
        $error = "";

        if (!empty($_POST["type"])) {
            if ($_POST["type"] == "HERO_POWER") {
                $data["key"] = $_SESSION["key"];
                $data["type"] = "HERO_POWER";
                $result = parent::callAPI("games/action", $data);
            } else if ($_POST["type"] == "END_TURN") {
                $data["key"] = $_SESSION["key"];
                $data["type"] = "END_TURN";
                $result = parent::callAPI("games/action", $data);
            } else if ($_POST["type"] == "SURRENDER") {
                $data["key"] = $_SESSION["key"];
                $data["type"] = "SURRENDER";
                $result = parent::callAPI("games/action", $data);
            } else if ($_POST["type"] == "PLAY") {
                $data["key"] = $_SESSION["key"];
                $data["type"] = "PLAY";
                $data["uid"] = $_POST["uid"];
                $result = parent::callAPI("games/action", $data);
                // Remplacer l'appel DAO par une simulation
                $this->simulateCardPlayed($_POST["id"]);
            } else if ($_POST["type"] == "ATTACK") {
                $data["key"] = $_SESSION["key"];
                $data["type"] = "ATTACK";
                $data["uid"] = $_POST["uid"];
                $data["targetuid"] = $_POST["targetuid"];
                $result = parent::callAPI("games/action", $data);
            } else if ($_POST["type"] == "BD") {
                // Remplacer l'appel DAO par une simulation
                $result = $this->simulateGetPopularite();
            } else if ($_POST["type"] == "MostPlayed") {
                // Remplacer l'appel DAO par une simulation
                $result = $this->simulateGetMostPlayed();
            } else if ($_POST["type"] == "icon") {
                if (isset($_SESSION["heroChoisi"])) {
                    $result = $_SESSION["heroChoisi"];
                } else {
                    $result = "Zenyatta";  // Valeur par défaut si aucun héros n'est choisi
                }
            }
        } else {
            $data["key"] = $_SESSION["key"];
            $result = parent::callAPI("games/state", $data);
        }

        return compact("result");
    }

    // Méthode simulée pour l'enregistrement d'une carte jouée
    private function simulateCardPlayed($id)
    {
        // Simuler l'ajout d'une carte jouée sans interagir avec une base de données
        error_log("Carte jouée avec l'ID: " . $id);
    }

    // Méthode simulée pour récupérer les popularités des cartes
    private function simulateGetPopularite()
    {
        // Retourner des données simulées
        return [
            ['idCarte' => 1, 'count' => 5],
            ['idCarte' => 2, 'count' => 3]
        ];
    }

    // Méthode simulée pour récupérer la carte la plus jouée
    private function simulateGetMostPlayed()
    {
        // Retourner des données simulées
        return ['idCarte' => 1, 'count' => 10];
    }
}
