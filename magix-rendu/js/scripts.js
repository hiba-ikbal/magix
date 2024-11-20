document.addEventListener("DOMContentLoaded", () => {
    const applyStyles = iframe => {
        let styles = {
            fontColor: "#333",
            backgroundColor: "rgba(87, 41, 5, 0.2)",
            fontGoogleName: "Sofia",
            fontSize: "20px",
            hideIcons: false,
            inputBackgroundColor: "red",
            inputFontColor: "blue",
            height: "700px",
            padding: "5px",
            memberListFontColor: "#ff00dd",
            borderColor: "blue",
            memberListBackgroundColor: "white",
            hideScrollBar: true, // pour cacher le scroll bar
        };

        setTimeout(() => {
            iframe.contentWindow.postMessage(JSON.stringify(styles), "*");
        }, 100);
    };
	const key = "<?php echo $_SESSION['key']; ?>"; // Récupérer la clé de session
	
    // document.getElementById("start-game").addEventListener("click", () => {
    //     const data = {
    //         key: key,
    //         type: "PVP", // Type de jeu
    //         mode: "STANDARD" 
    //     };
    //    // callAPI("games/auto-match", data);
    // });
	// document.getElementById("start-practice").addEventListener("click", () => {
    //     const data = {
    //         key: key,
    //         type: "TRAINING", // Type de jeu pour pratique
    //         mode: "STANDARD" 
    //     };
    //     callAPI("games/auto-match", data);
    // });

    // document.getElementById("back-button").addEventListener("click", () => {
    //     const iframe = document.getElementById("my-iframe");
    //     iframe.style.display = "none"; // Cache l'iframe
    // });
    
    //     // Fonction pour appeler l'API

    // function callAPI(service, data) {
    //     fetch(`https://magix.apps-de-cours.com/api/${service}`, {
    //         method: 'POST',
    //         headers: {
    //             'Content-Type': 'application/json',
    //         },
    //         body: JSON.stringify(data)
    //     })
    //     .then(response => response.json())
    //     .then(result => {
    //         // Vérification des résultats de l'API
    //         if (result === "INVALID_KEY" || result === "INVALID_GAME_TYPE" || result === "DECK_INCOMPLETE") {
    //             alert("Erreur: " + result); // Afficher une erreur si le résultat est invalide
    //         } else {
    //             // Si le résultat est valide, rediriger vers la page du jeu
    //             window.location.href = "game.php";
    //         }
    //     })
    //     .catch(error => {
    //         console.error("Error calling API:", error);
    //     });
    // }
    // Fonction AJAX pour récupérer l'état du jeu
function fetchGameState() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "ajax.php", true);  // Envoi de la requête GET vers ajax.php
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onload = function() {
        if (xhr.status === 200) {
            // Récupérer les données renvoyées par ajax.php
            const stateData = JSON.parse(xhr.responseText);

            // Afficher les cartes de l'adversaire
            const enemyBoardCards = stateData.opponent.board;
            const enemyBoardContainer = document.getElementById("enemy-board-cards-container");

            enemyBoardCards.forEach(card => {
                const cardElement = document.createElement("div");
                cardElement.classList.add("enemy-card");

                // Créez la carte avec les informations nécessaires
                cardElement.innerHTML = `
                    <div class="card-info">
                        <h3>${card.name}</h3>
                        <p>Attaque: ${card.attack}</p>
                        <p>Vie: ${card.hp}</p>
                        <p>Coût: ${card.cost}</p>
                    </div>
                `;

                enemyBoardContainer.appendChild(cardElement);
            });

            // Afficher les cartes du joueur
            const playerBoardCards = stateData.board;
            const playerBoardContainer = document.getElementById("player-board-cards-container");

            playerBoardCards.forEach(card => {
                const cardElement = document.createElement("div");
                cardElement.classList.add("player-card");

                // Créez la carte avec les informations nécessaires
                cardElement.innerHTML = `
                    <div class="card-info">
                        <h3>${card.name}</h3>
                        <p>Attaque: ${card.attack}</p>
                        <p>Vie: ${card.hp}</p>
                        <p>Coût: ${card.cost}</p>
                    </div>
                `;

                playerBoardContainer.appendChild(cardElement);
            });
        }
    };

    xhr.send();
}

// Appeler la fonction AJAX dès que la page est chargée
document.addEventListener("DOMContentLoaded", fetchGameState);

});
