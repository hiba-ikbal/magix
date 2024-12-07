document.addEventListener("DOMContentLoaded", () => {
    const applyStyles = iframe => {
        let styles = {
            fontColor: "#333",
            // backgroundColor: "rgba(87, 41, 5, 0.2)",
            backgroundColor:"#FFFFFF",
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



const dialogues = [
    "Ah, welcome! Are you ready to test your magical prowess in the wizarding duel?",
    "Choose your deck wisely, for every card holds a secret power.",
    "Choose your path: Practice your spells, challenge a rival, or customize your deck.",
];

let dialogueIndex = 0;

function changeDialogue() {
    dialogueIndex = (dialogueIndex + 1) % dialogues.length;
    document.getElementById('dialogue-text').textContent = dialogues[dialogueIndex];
}
setInterval(changeDialogue, 5000); // Changes dialogue every 5 seconds


});

