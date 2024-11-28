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

});
