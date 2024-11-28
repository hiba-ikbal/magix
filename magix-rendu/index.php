<!-- entry point page  squelette du site utilise du code php pour inserer les infos a partir de la bd-->
<?php
require_once("actions/IndexAction.php");

$action = new IndexAction();
$data = $action->execute();
require_once("partials/header.php");

?>
<body  class="page-index">

<div class="index-image-container">
        <img src="path-to-your-image.jpg" alt="Image before header" class="index-image">
    </div>

    <div>
       
        <video autoplay muted loop id="myVideo">
            <source src="../assets/great-hall-hogwarts.1920x1080.mp4" type="video/mp4"> 
        </video>
        <h1 class="title">Accio Jeu! Bienvenue dans la Magie!</h1>
        

    </div>

    <?php
	require_once("partials/footer.php");
