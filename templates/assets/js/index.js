const swiper = new Swiper('.swiper', {
  loop: true,               // Faz o carrossel ser infinito
  autoplay: {               // Passa sozinho
    delay: 3000,
  },
  pagination: {             // Ativa as bolinhas
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {             // Ativa as setas
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


const aButtons = document.querySelectorAll(".queuePage, .instagram, .buttonLi, .buttons button")

aButtons.forEach((button)=>{
  button.addEventListener('click',()=>{
    button.querySelector('a').click()
  })
})