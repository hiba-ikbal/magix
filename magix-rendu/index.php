<!-- entry point page  squelette du site utilise du code php pour inserer les infos a partir de la bd-->
<?php
require_once("actions/IndexAction.php");

$action = new IndexAction();
$data = $action->execute();

// // Vérifier si on est sur la page index.php
// if (isset($_GET['page']) && $_GET['page'] == 'index') {
//     // Définir la variable PHP qui contiendra le code HTML de la div avec les images et les liens
//     $imagesLinks = '
//         <div class="image-links">
//             <a href="https://www.example1.com">
//                 <img src="image1.jpg" alt="Image 1">
//             </a>
//             <a href="https://www.example2.com">
//                 <img src="image2.jpg" alt="Image 2">
//             </a>
//             <a href="https://www.example3.com">
//                 <img src="image3.jpg" alt="Image 3">
//             </a>
//         </div>
//     ';
// } else {
//     // Si ce n'est pas index.php, définir $imagesLinks comme vide ou null
//     $imagesLinks = '';
// }

// Inclure le fichier header.php

require_once("partials/header.php");

?>

<body  class="page-index">
<!-- Afficher la div avec les liens et images uniquement si elle est définie -->

<?php if (isset($imagesLinks) && $imagesLinks) { echo $imagesLinks; } ?>

    <div>
       
        <video autoplay muted loop id="myVideo">
            <source src="../assets/great-hall-hogwarts.1920x1080.mp4" type="video/mp4"> 
        </video>
        <h1 class="title">Accio Jeu! Bienvenue dans la Magie!</h1>
        <div class="rules-list">
            <h2>Règles du jeu :</h2>
            <ul>
            <li>Les sorciers doivent choisir un <strong>Patronus</strong> parmi une sélection de créatures magiques.</li>
            <li>Chaque joueur commence avec un certain nombre de <strong>points de vie</strong> magiques (repré­sentés par leur <strong>énergie magique</strong>).</li>
            <li>Le but est de réduire l'énergie magique de l'adversaire à zéro en utilisant des sorts et des artefacts magiques.</li>
            <li>Le jeu se déroule en <strong>rondes de duel</strong>. À chaque ronde, le joueur peut attaquer avec un sortilège pour modifier l'issue du combat.</li>
            <li>Les <strong>cartes de sorts</strong> sont tirées de façon aléatoire au début de chaque duel et peuvent avoir des effets variés, tels que lancer des sortilèges, invoquer des créatures ou jeter des malédictions sur l'adversaire.</li>
            <li>Les sorciers peuvent améliorer leur <strong>grimoire de sorts</strong> au fur et à mesure des victoires et des découvertes magiques.</li>
            <li>Ce jeu est réservé aux élèves actuels de <strong>Poudlard</strong> ou aux anciens étudiants ayant maîtrisé les mystères de la magie.</li>

            </ul>
        </div>
    </div>
    </div>

    <?php
	require_once("partials/footer.php");
