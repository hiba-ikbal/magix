<!-- entry point page  squelette du site utilise du code php pour inserer les infos a partir de la bd-->
<?php
require_once("actions/IndexAction.php");

$action = new IndexAction();
$data = $action->execute();
require_once("partials/header.php");

?>

  
    <div class="page-index">
        <h1>Bienvenue dans le jeu!</h1>
        <video controls width="600">
            <source src="path/to/video.mp4" type="video/mp4"> <!-- Replace with the video path -->
        </video>
        
        <?= $data["text"] ?>


        
    </div>
</body>
</html>

