<!-- entry point page  squelette du site utilise du code php pour inserer les infos a partir de la bd-->
<?php
require_once("actions/IndexAction.php");

$action = new IndexAction();
$data = $action->execute();



require_once("partials/header.php");

?>

<body class="page-index">
    <div>

        <video autoplay muted loop id="myVideo">
            <source src="./assets/great-hall-hogwarts.1920x1080.mp4" type="video/mp4">
        </video>
        <h1 class="title">Accio Jeu! Bienvenue dans la Magie!</h1>
        <div class="rules-list">
            <h2>Règles du jeu :</h2>
            <ul>
                <li>Les sorciers doivent choisir un <strong>Patronus</strong> parmi une sélection de créatures magiques.
                </li>
                <li>Chaque joueur commence avec un certain nombre de <strong>points de vie</strong> magiques
                    (repré­sentés par leur <strong>énergie magique</strong>).</li>
                <li>Le but est de réduire l'énergie magique de l'adversaire à zéro en utilisant des sorts et des
                    artefacts magiques.</li>
                <li>Le jeu se déroule en <strong>rondes de duel</strong>. À chaque ronde, le joueur peut attaquer avec
                    un sortilège pour modifier l'issue du combat.</li>
                <li>Les <strong>cartes de sorts</strong> sont tirées de façon aléatoire au début de chaque duel et
                    peuvent avoir des effets variés, tels que lancer des sortilèges, invoquer des créatures ou jeter des
                    malédictions sur l'adversaire.</li>
                <li>Les sorciers peuvent améliorer leur <strong>grimoire de sorts</strong> au fur et à mesure des
                    victoires et des découvertes magiques.</li>
                <li>Ce jeu est réservé aux élèves actuels de <strong>Poudlard</strong> ou aux anciens étudiants ayant
                    maîtrisé les mystères de la magie.</li>

            </ul>
        </div>
    </div>
    </div>

    <?php
    require_once("partials/footer.php");
