const cardBoard = document.querySelector("#cardboard");
const imgs = [
  "Card 1.png",
  "Card 2.png",
  "Card 3.png",
  "Card 4.png",
  "Card 5.png",
  "Card 6.png"
];

let cardHTML = "";
let pontos = 0;

imgs.forEach(img => {
  cardHTML += `<div class="memory-card" data-card="${img}">
    <img class="front-face" src="../imagens/img/${img}"/>
    <img class="back-face" src="../imagens/img/carta.png">
  </div>`;
});

cardBoard.innerHTML = cardHTML + cardHTML;

/** Fim da Renderização HTML */


const cards = document.querySelectorAll(".memory-card");
let firstCard, secondCard, resposta;
let lockCards = false;


function verificacao() {
  $('#myModal').modal('show');
  const form = document.querySelector('#questao');
  $('#submit').on('click', function (e) {
    e.preventDefault();
    if (form.questao1.value === "D") {
      $('#myModal').modal('hide')
      $('#correto').modal('show');
      return resposta = true;
      
    } else {
      $('#myModal').modal('hide')
      $('#incorreto').modal('show');
      return resposta = false;
    }
  })
}

function flipCard() {
  if(pontos > 5){
    $('Game Over').modal('show');  
  } else{
  if (lockCards) return false;
  var qlqr = this;
  

  verificacao();
  
  if (resposta) {
    qlqr.classList.add('flip');
    if (!firstCard) {
      firstCard = this;

      return false;


    }
    secondCard = qlqr;
    checkForMatch();
    
  }


  }
}

function checkForMatch() {
  let isMatch = firstCard.dataset.card === secondCard.dataset.card;

  !isMatch ? unFlipCards() : resetCards(isMatch);
  if (!isMatch) {
    pontos++;
  }
}

(function aleatorio() {
  cards.forEach(card => {
    var rand = Math.floor(Math.random() * 12);
    card.style.order = rand;
  });
})();

function unFlipCards() {
  lockCards = true;
  setTimeout(() => {
    firstCard.classList.remove("flip");
    secondCard.classList.remove("flip");

    resetCards();
  }, 1000);
}

function resetCards(isMatch = false) {
  if (isMatch) {
    firstCard.removeEventListener("click", flipCard);
    secondCard.removeEventListener("click", flipCard);
  }

  [firstCard, secondCard, lockCards] = [null, null, false];
}

cards.forEach(card => card.addEventListener("click", flipCard));










