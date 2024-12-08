let playerHand = [];
let enemyHand = [];
let playerBoard = [];
let EnemyBoard = [];
let mana = 0;
let startgame = false;
let Selected = null;
let hand = document.querySelector("#cards");
let enemy = document.querySelector("#section-top");
let messages = document.querySelector("#message");

const state = () => {
  fetch("ajax.php", {
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      switch (data) {
        case "WAITING":
          messages.style.display = "block";
          messages.innerHTML = data;
          break;
        case "LAST_GAME_WON":
          messages.style.display = "block";
          messages.innerHTML = "VICTOIRE";
          messages.setAttribute("id", "messagesFin");
          break;
        case "LAST_GAME_lOST":
          messages.style.display = "block";
          messages.innerHTML = "DEFAITE";
          messages.setAttribute("id", "messagesFin");
      }
      if (startgame == false && data.opponent != undefined) {
        StartGame(data);
      }
      refreshUIP(data);
      updateGame(data);
      setTimeout(state, 1000);
    });
};
let StartGame = (data) => {
  messages.style.display = "none";
  let playerImage = document.querySelector("#playerIcon");
  playerImage.innerHTML = null;

  let enemyImage = document.querySelector("#enemyIcon");
  enemyImage.innerHTML = null;
  let enemyIcon = document.createElement("img");
  if (data.opponent != undefined) {
    if (data.opponent.heroClass.includes("Warlock")) {
      enemyIcon.src = "./assets/Cards/severus.png";
    } else if (data.opponent.heroClass.includes("Demonhunter")) {
      enemyIcon.src = "./assets/Cards/Demonhunter.png";
    } else if (data.opponent.heroClass.includes("Druid")) {
      enemyIcon.src = "./assets/Cards/Druid.png";
    } else if (data.opponent.heroClass.includes("Paladin")) {
      enemyIcon.src = "./assets/cards/Paladin.png";
    } else if (data.opponent.heroClass.includes("Warrior")) {
      enemyIcon.src = "./assets/Cards/BL.png";
    } else if (data.opponent.heroClass.includes("Hunter")) {
      enemyIcon.src = "./assets/Cards/Hunter.png";
    } else if (data.opponent.heroClass.includes("Rogue")) {
      enemyIcon.src = "./assets/Cards/Rogue.png";
    } else if (data.opponent.heroClass.includes("Priest")) {
      enemyIcon.src = "./assets/Cards/Priest.png";
    } else if (data.opponent.heroClass.includes("Shaman")) {
      enemyIcon.src = "./assets/Cards/Shaman.png";
    } else if (data.opponent.heroClass.includes("Mage")) {
      enemyIcon.src = "./assets/Cards/Mage.png";
    } else {
      enemyIcon.src = "./assets/Cards/Voldemor.png";
    }

    enemyIcon.classList.add("img");

    enemyImage.append(enemyIcon);
    let playerIcon = document.createElement("img");
    let formData = new FormData();
    formData.append("type", "icon");
    fetch("ajax.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        playerIcon.src = "./assets/Cards/" + data + ".png";
      });

    playerIcon.alt = "playerIcon";
    playerIcon.classList.add("img");
    playerImage.append(playerIcon);
    enemyIcon.onclick = () => {
      if (Selected != null) {
        attack(Selected, 0);
        Selected = null;
      }
    };
  }
  startgame = true;
};
let refreshUIP = (data) => {
  document.querySelector("#class").innerHTML = "class: " + data.heroClass;
  document.querySelector("#vies").innerHTML = "hp: " + data.hp;
  document.querySelector("#timerValue").innerHTML = data.remainingTurnTime;

  document.querySelector("#mana").innerHTML = "mana: " + data.mp;
  document.querySelector("#turn").innerHTML =
    data.yourTurn == true ? "Your turn" : "Enemy turn";
  document.querySelector("#remaining").innerHTML =
    "cartes restantes: " + data.remainingCardsCount;
};

let refreshUIE = (data) => {
  document.querySelector("#enemy").innerHTML =
    "class: " + data.opponent.heroClass;
  document.querySelector("#enemyHP").innerHTML = "hp: " + data.opponent.hp;
  document.querySelector("#timerValue").innerHTML = data.remainingTurnTime;
  document.querySelector("#enemyMana").innerHTML = "mana: " + data.opponent.mp;
  document.querySelector("#turn").innerHTML =
    data.yourTurn == true ? "Your turn" : "Enemy turn";
  document.querySelector("#remainingCardsEnemy").innerHTML =
    "cartes restantes: " + data.opponent.remainingCardsCount;
};
const creatCard = (element, imageId) => {
  let carte = document.createElement("div");
  let container = document.createElement("div");
  if (element != 0) {
    let img = document.createElement("div");

    img.classList.add("imgCard");
    carte.classList.add("card");
    if (element.state == "idle") {
      carte.classList.add("playableCard");
    }
    container.classList.add("container");
    let name = document.createElement("h4");
    let textName = element.id;
    let cardName = document.createElement("h3");
    let info = document.createElement("info");
    if (element.mechanics.includes("Charge")) {
      img.style.backgroundImage = "url(./assets/Cards/Charge.png)";
    } else if (element.mechanics.includes("Taunt")) {
      img.style.backgroundImage = "url(./assets/Cards/Taunt.png)";
    } else if (element.mechanics.includes("Confused")) {
      img.style.backgroundImage = "url(./assets/Cards/Confused.png)";
    } else if (element.mechanics.includes("Stealth")) {
      img.style.backgroundImage = "url(./assets/Cards/Stealth.png)";
    } else {
      img.style.backgroundImage = "url(" + cardImage(imageId) + ")";
    }

    let textTnfo = element.mechanics;
    let hp = document.createElement("div");
    hp.innerText = element.hp;
    hp.classList.add("hp");
    let atk = document.createElement("div");
    atk.innerText = element.atk;
    atk.classList.add("atk");
    let cost = document.createElement("div");
    cost.innerHTML = element.cost;
    cost.classList.add("cost");
    info.append(textTnfo);
    cardName.append(textName);
    name.append(cardName);
    container.append(info);
    carte.append(hp);
    carte.append(atk);
    carte.append(cost);
    carte.append(img);
    if (element.state == "SLEEP") {
      let sleep = document.createElement("div");
      sleep.classList.add("sleep");
      carte.append(sleep);
    }
  } else {
    carte.classList.add("cardEnemy");
  }
  carte.append(container);
  return carte;
};
let updateGame = (data) => {
  if (typeof data != "object") {
    messages.style.display = "block";
    messages.setAttribute("id", "messageErreurs");
    messages.innerHTML = data;
    setTimeout(() => {
      messages.style.display = "none";
      messages.removeAttribute("id", "messageErreurs");
    }, 2000);
  } else {
    if (
      JSON.stringify(data.hand) != JSON.stringify(playerHand) ||
      mana != data.mp
    ) {
      hand.innerHTML = null;
      mana = data.mp;
      let main = data.hand;
      main.forEach((element) => {
        let carte = creatCard(element, element.id);
        if (element.cost <= data.mp) {
          carte.classList.add("playableCard");
        }
        hand.append(carte);

        carte.onclick = () => {
          let formData = new FormData();
          formData.append("type", "PLAY");
          formData.append("uid", element.uid);
          formData.append("id", element.id);
          fetch("ajax.php", {
            method: "POST",
            body: formData,
          })
            .then((response) => response.json())
            .then((data) => {
              updateGame(data);
            });
        };
      });
      playerHand = data.hand;
    }
    if (JSON.stringify(data.opponent.handSize) != JSON.stringify(enemyHand)) {
      let enemyCards = document.querySelector("#enemyCards");
      enemyCards.innerHTML = null;
      let enemyHandSize = data.opponent.handSize;
      for (let i = 0; i < enemyHandSize; i++) {
        let carte = creatCard(0, 102);
        enemyCards.append(carte);
      }
      enemyHand = data.opponent.handSize;
    }
    if (JSON.stringify(data.board) != JSON.stringify(playerBoard)) {
      let board = document.querySelector("#boardCard");
      board.innerHTML = null;
      let boardCards = null;
      boardCards = data.board;
      boardCards.forEach((element) => {
        let carte = creatCard(element, element.id);
        board.append(carte);
        carte.onclick = () => {
          carte.classList.add("isSelected");
          Selected = element.uid;
        };
      });
      playerBoard = data.board;
    }
    if (JSON.stringify(data.opponent.board) != JSON.stringify(EnemyBoard)) {
      let boardenemy = null;
      boardenemy = data.opponent.board;
      let boardCardenemy = document.querySelector("#board-section");
      boardCardenemy.innerHTML = null;
      boardenemy.forEach((element) => {
        let carte = creatCard(element, element.id);
        boardCardenemy.append(carte);
        carte.onclick = () => {
          if (Selected != null) {
            attack(Selected, element.uid);
            Selected = null;
          }
        };
      });
      EnemyBoard = data.opponent.board;
    }

    refreshUIE(data);
  }
};
const cardImage = (id) => {
  let image;

  if (id <= 31) {
    image = "./assets/Cards2/Gryffindor.jpeg";
  } else if (id > 31 && id <= 62) {
    image = "./assets/Cards2/Ravenclaw.jpeg";
  } else if (id > 62 && id <= 93) {
    image = "./assets/Cards2/Slytherin.jpeg";
  } else if (id > 93 && id <= 101) {
    image = "./assets/Cards2/Hufflepuff.jpeg";
  } else if (id == 102) {
    image = "./assets/img1.png";
  } else {
    image = "./assets/dumbledor.jpg";
  }
  return image;
};

const endTurn = () => {
  let formData = new FormData();
  formData.append("type", "END_TURN");
  fetch("ajax.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      updateGame(data);
    });
};

const surrender = () => {
  let formData = new FormData();
  formData.append("type", "SURRENDER");
  fetch("ajax.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {});
};
const attack = (uidCarteMain, uidTarget) => {
  let formData = new FormData();
  formData.append("type", "ATTACK");
  formData.append("uid", uidCarteMain);
  formData.append("targetuid", uidTarget);
  fetch("ajax.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      updateGame(data);
    });
};

const quitGame = () => {
  window.location.href = "Lobby.php";
};
const heroPower = () => {
  let formData = new FormData();
  formData.append("type", "HERO_POWER");
  fetch("ajax.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      updateGame(data);
    });
};

window.addEventListener("load", () => {
  setTimeout(state, 1000);
});
