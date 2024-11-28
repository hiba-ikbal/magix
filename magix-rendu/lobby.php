<!-- lobby page -->
<?php
require_once("actions/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();
require_once("partials/header.php");

?>
<script defer src="js/lobbyanimaion.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/GSDevTools.min.js"></script>
<body>

 <div class="lobby">
 <div class="container">
    <svg id="scene" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 700" xmlns:serif="http://www.serif.com/" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5">
      <!-- Example of the elements for Harry and Ron (you can add specific SVG content here) -->
      <g id="puppet-pals">
    <path fill="#00b6ff" stroke="#a1a1a1" stroke-width="2.5" d="M0 0h1280v800H0z"/>
     
        <!-- Harry's SVG elements -->
        <g class="fadeOut" id="harry">
      <g id="shirt">
        <path id="torso" d="M56.601 509.056l-1.317 57.558 69.682 2.262-2.701-62.779-65.664 2.959z" fill="#ecbcaf" stroke="#000" stroke-width="3"/>
        <g class="arm" id="left-arm" stroke="#000" stroke-width="3">
          <path d="M51.601 352.181C30.61 372.46 10.959 405.242 4.955 420.478c-2.893 7.342-1.217 18.884 9.166 23.054 10.383 4.17 16.805.907 23.068-2.778 5.438-3.2 14.176-33.596 14.412-88.573" fill="#222"/>
          <path d="M4.308 432.316s-7.528 21.552-2.681 24.156c4.847 2.604 11.528 3.663 14.986 3.185 3.457-.479 12.245-15.326 12.245-15.326" fill="#facecd"/>
        </g>
        <g class="arm" id="right-arm" stroke="#000" stroke-width="3">
          <path d="M108.439 353.919c22.322 18.804 44.157 50.173 51.184 64.965 3.386 7.128 2.499 18.758-7.577 23.624-10.075 4.867-16.704 2.049-23.204-1.202-5.642-2.822-16.428-32.554-20.403-87.387" fill="#222"/>
          <path d="M159.47 432.316s7.529 21.552 2.681 24.156c-4.847 2.604-11.527 3.663-14.985 3.185-3.458-.479-12.245-15.326-12.245-15.326" fill="#facecd"/>
        </g>
        <path id="chest" d="M34.657 502.938c32.588 12.607 66.01 12.683 100.264.228-1.65-15.05-2.292-30.842-5.271-45.078-3.538-16.914-9.555-32.219-12.983-49.709-3.5-17.855-4.436-38.421-8.228-56.198-22.284 12.897-41.095 12.373-56.838 0l-3.244 51.02-11.076 51.967-2.624 47.77z" fill="#222" stroke="#000" stroke-width="3"/>
        <g id="crest">
          <path fill="#f24040" d="M91.357 384.656h15.277v3.788H91.357z"/>
          <path d="M93.226 389.808c2.028 13.757 6.063 13.392 6.063 13.392l6.062-4.368-6.062-9.024-3.833 9.024s-7.482-14.876-2.23-9.024c5.252 5.852 6.063 9.024 6.063 9.024l6.062-9.024-12.125 4.314" fill="none" stroke="#fffb58" stroke-width="3"/>
        </g>
      </g>
      <g id="harry-head" stroke="#000" stroke-width="3">
        <ellipse id="left-ear" cx="31.847" cy="310.299" rx="13.203" ry="14.761" fill="#ecbcaf"/>
        <ellipse id="right-ear" cx="133.762" cy="310.299" rx="13.203" ry="14.761" fill="#ecbcaf"/>
        <ellipse id="head" cx="83.63" cy="316.399" rx="50.132" ry="45.691" fill="#ecbcaf"/>
        <path id="scar" d="M87.757 276.299l-5.34 6.31 6.088 2.158-6.533 7.338" fill="none"/>
        <g id="glasses">
          <ellipse cx="102.524" cy="317.631" rx="16.042" ry="17.258" fill="#fff"/>
          <ellipse cx="56.127" cy="316.399" rx="16.042" ry="17.258" fill="#fff"/>
          <path d="M72.121 317.742l14.157.263" fill="none"/>
        </g>
        <path id="mouth" d="M58.155 342.753c12.827 7.225 26.594 6.915 41.256-.585" fill="none"/>
        <g id="hair">
          <path d="M53.95 282.019l-1.284 8.611s13.979-10.52 15.875-10.938c1.896-.418 5.089 20.973 9.238 17.087 2.146-2.01-1.911-25.638 7.067-23.879 6.284 1.231 9.296-.288 9.296-.288s-3.418 21.73-1.886 20.913c3.418-1.822 11.251-10.599 10.268-10.212-.427.168 4.319-1.172 8.834 5.279 1.96 2.801 2.632 8.933 5.554 14.029 1.525 2.66 3.056-17.116 3.647-11.415l3.562 6.363 4.181-5.34c-25.146-28.466-49.985-33.241-74.352-10.21z"/>
          <path d="M34.784 306.08c-6.852-9.851-6.614-18.545-1.286-26.406l-9.692-15.611 18.111 1.6 6.256-5.085-14.675-13.77 20.626 1.992 11.698-4.869s-2.246-12.374 2.046-12.764c5.51-.5 26.675 3.36 31.015 9.761 2.521 3.718 17.275-.898 17.275-.898s8.561 12.337 7.649 20.056c-.913 7.718 11.143 1.87 11.143 1.87 3.554 2.516 4.728 35.596-1.188 32.886-1.899-.87-32.888-28.855-50.132-24.134-17.244 4.72-34.97 6.316-48.846 35.372z"/>
        </g>
      </g>
    </g>
   
   
        <!-- Ron's SVG elements -->
        <<g class="fadeOut" id="ron">
      <g id="R-shirt">
        <path id="torso1" serif:id="torso" d="M208.501 510.747l-1.461 56.408 77.313 2.217-2.996-61.525-72.856 2.9z" fill="#ecbcaf" stroke="#000" stroke-width="3"/>
        <g class="arm" id="left-arm1" serif:id="left-arm" stroke="#000" stroke-width="3">
          <path d="M223.287 347.147s-48.766 61.089-54.652 76.024c-2.836 7.197-1.193 18.511 8.985 22.599 10.178 4.088 16.474.889 22.613-2.723 5.331-3.137 22.824-42.008 23.054-95.9z" fill="#222"/>
          <path d="M168.001 434.775s-7.379 21.127-2.628 23.679c4.752 2.553 11.3 3.591 14.69 3.122 3.389-.469 12.003-15.023 12.003-15.023" fill="#facecd"/>
        </g>
        <g class="arm" id="right-arm1" serif:id="right-arm" stroke="#000" stroke-width="3">
          <path d="M263.566 347.132c23.928 15.683 55.892 51.022 64.465 64.594 4.131 6.54 4.631 17.962-4.604 23.88-9.234 5.918-16.017 3.952-22.723 1.55-5.823-2.085-26.841-37.125-37.138-90.024" fill="#222"/>
          <path d="M329.457 424.816s9.854 20.092 5.442 23.195c-4.412 3.102-10.79 4.916-14.211 4.856-3.422-.06-13.714-13.479-13.714-13.479" fill="#facecd"/>
        </g>
        <path id="chest1" serif:id="chest" d="M197.751 504.003c31.945 12.358 64.706 12.432 98.284.223-1.618-14.753-2.247-30.233-5.167-44.188-3.469-16.579-9.367-31.582-12.727-48.727-3.43-17.502-10.688-45.402-14.405-62.828-21.992 2.313-21.563 3.012-40.282-1.336l-12.274 59.088-10.857 50.941-2.572 46.827z" fill="#222" stroke="#000" stroke-width="3"/>
        <g id="crest1" serif:id="crest">
          <path fill="#f24040" d="M253.331 388.057h14.975v3.713h-14.975z"/>
          <path d="M255.164 393.107c1.987 13.485 5.942 13.127 5.942 13.127l5.943-4.282-5.943-8.845-3.756 8.845s-7.335-14.582-2.186-8.845c5.148 5.736 5.942 8.845 5.942 8.845l5.943-8.845-11.885 4.228" fill="none" stroke="#fffb58" stroke-width="3"/>
        </g>
      </g>
      <g id="ron-head">
        <ellipse cx="199.844" cy="295.631" rx="11.681" ry="13.034" fill="#ecbcaf" stroke="#000" stroke-width="3"/>
        <ellipse cx="296.035" cy="303.703" rx="11.681" ry="13.034" fill="#ecbcaf" stroke="#000" stroke-width="3"/>
        <ellipse cx="245.367" cy="294.582" rx="47.616" ry="55.186" fill="#ecbcaf" stroke="#000" stroke-width="3"/>
        <path d="M282.502 315.707c.719.347.96 1.337.539 2.209-.422.872-1.347 1.299-2.065.951-.719-.347-.96-1.336-.539-2.209.422-.872 1.347-1.298 2.065-.951z" fill="#f69b3a"/>
        <path id="R-hair" d="M197.751 294.582c33.435-6.205 50.713-19.3 52.483-39.007 6.198 3.675 7.253 11.745 4.915 22.714 6.007-2.376 10.745-7.419 13.56-16.507 7.646 2.159 11.194 8.917 10.16 20.815l9.111-7.036 3.49 19.021c4.113-4.641 4.979-11.986 3.514-21.275-5.317-20.007-15.013-32.011-28.696-36.727l-17.859.531-5.203-5.987-5.054 6.84-11.017 1.431c-20.566 14.422-29.209 33.245-29.404 55.187z" fill="#f69b3a" stroke="#000" stroke-width="3"/>
        <ellipse id="R-leftEye" cx="228.62" cy="300.74" rx="3.571" ry="5.108"/>
        <ellipse id="R-rightEye" cx="263.934" cy="300.74" rx="3.571" ry="5.108"/>
        <g id="mouth1" serif:id="mouth">
          <ellipse cx="244.491" cy="331.839" rx="15.872" ry="15.496"/>
       
     
      <!-- Dialogue text -->
      <text id="ron-answer" x="50%" y="60%" text-anchor="middle" font-size="30" fill="white" visibility="hidden">
        I don't believe it! I don't believe it!
      </text>
      <text id="harry-answer" x="50%" y="65%" text-anchor="middle" font-size="30" fill="white" visibility="hidden">
        What?
      </text>
      <text id="ron-answer2" x="50%" y="70%" text-anchor="middle" font-size="30" fill="white" visibility="hidden">
        You were right, Harry. You were right all along!
      </text>
      <text id="harry-answer2" x="50%" y="75%" text-anchor="middle" font-size="30" fill="white" visibility="hidden">
        About what?
      </text>
      <text id="ron-answer3" x="50%" y="80%" text-anchor="middle" font-size="30" fill="white" visibility="hidden">
        That we could win this! We're doing it!
      </text>
    </svg>
  </div>
    
    

   

    <!-- <form method="post" action="logout.php"> 
   		<input type="hidden" name="action" value="logout">
    	<button type="submit">Quitter</button>

	</form>
	
	
	<form method="post" action="deck.php"> 
   		<input type="hidden" name="action" value="deck">
    	<button type="submit">Modifier deck</button>

	</form>
	<button id="start-game">Jouer</button>
    <button id="start-practice">Pratique</button> -->
	<button><a href="?pratique=true">Pratique</a></button>
            <button><a href="?jouer=true">Jouer</a></button>
            <!-- <button><a href="blog.php?id=1">Blog</a></button> -->
            <button><a href="?logout=true">Quitter</a></button>
	<iframe style="width:700px;height:240px;" onload="applyStyles(this)" 
        src="https://magix.apps-de-cours.com/server/chat/<?php echo $_SESSION["key"] ?>">
</iframe>


</div>
<!-- code pour la ideo du lobby est un codepen https://codepen.io/cgorton/pen/aPrKwY modifie pour fit le jeu :) -->


<?php
	require_once("partials/footer.php");

	