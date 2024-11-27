<?php
    require_once("actions/CommonAction.php");
    //require_once("actions/DAO/RulesDAO.php");

    class GameAction extends CommonAction {



        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

         
             
                    // Prendre la clé de session pour pouvoir récupérer l'état du jeu
                    $key = $_SESSION["key"];
                    
                    // API Call
                    $data = [];
                    $data["key"] = $_SESSION["key"];
            
                    // Appel à l'API pour obtenir l'état du jeu
                    $result = parent::callAPI("games/state", $data);
            
                    // Renvoyer les données à la vue (game.php)
                    return compact("result");
                }
            }
          
            
       
    