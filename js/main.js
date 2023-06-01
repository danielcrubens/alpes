"use strict";
$(document).ready(function () {
  window.addEventListener('scroll', () => {
    const scroll = window.scrollY;
    const bgAlpes = document.querySelector('.bg-alpes');
    const scrollHeading = document.querySelector('#scroll-heading');
    
    bgAlpes.style.backgroundSize = `${100 + scroll/10}%`;
    bgAlpes.style.top = `-${scroll/10}%`;
    
    const windowWidth = window.innerWidth;
    let fadeOutStart = 110; // Valor padrão para telas menores que 1600 pixels de largura
    
    if (windowWidth >= 1920) {
      fadeOutStart = 320; // Valor para telas de 1920 pixels ou mais
    } else if (windowWidth >= 1600) {
      fadeOutStart = 100; // Valor para telas de 1600 pixels ou mais
    }
    
    const fadeInStart = fadeOutStart;
    
    if (scroll >= fadeOutStart) {
      scrollHeading.classList.add('fade-out');
      scrollHeading.style.opacity = 0;
      scrollHeading.style.transform = 'scale(0.9)'; // Zoom out durante o fade out
      scrollHeading.style.transition = 'opacity 0.9s ease, transform 0.7s ease'; // Transição suave
    } else {
      scrollHeading.classList.remove('fade-out');
      scrollHeading.style.opacity = 1;
      scrollHeading.style.transform = 'scale(1)'; // Zoom in durante o fade in
      scrollHeading.style.transition = 'opacity 0.5s ease, transform 0.5s ease'; // Transição suave
    }
    
    if (scroll <= fadeInStart) {
      scrollHeading.classList.add('fade-in');
      scrollHeading.style.transform = 'scale(1)'; // Zoom in durante o fade in
    } else {
      scrollHeading.classList.remove('fade-in');
    }
  });
})
 // Obtém uma lista de todos os elementos de imagem
 var images = document.querySelectorAll('.dan img');

 // Cria um array com os URLs das imagens
 var imageUrls = [];
 images.forEach(function(image) {
   imageUrls.push(image.src);
 });

 // Inicia o temporizador para atualizar as imagens a cada 5 segundos
 setInterval(function() {
   // Embaralha o array de URLs das imagens
   var shuffledImageUrls = shuffleArray(imageUrls);

   // Atualiza as imagens com os URLs embaralhados
   images.forEach(function(image, index) {
     image.src = shuffledImageUrls[index];
   });
 }, 6000); // 5000 milissegundos = 5 segundos

 // Função para embaralhar um array
 function shuffleArray(array) {
   var currentIndex = array.length, temporaryValue, randomIndex;

   // Enquanto ainda houver elementos para embaralhar
   while (0 !== currentIndex) {
     // Seleciona um elemento restante
     randomIndex = Math.floor(Math.random() * currentIndex);
     currentIndex -= 1;

     // E troca com o elemento atual
     temporaryValue = array[currentIndex];
     array[currentIndex] = array[randomIndex];
     array[randomIndex] = temporaryValue;
   }

   return array;
 }
$(document).ready(function () {

  const ScrollDown = ScrollReveal({
    duration: 960,
    distance: "50px",
    origin: "top",
    easing: "ease-out",
    reset: false,
  });
  ScrollDown.reveal(".scroll-down", { delay: 350 });
  ScrollDown.reveal(".scroll-down-delay-1", { delay: 450 });
  ScrollDown.reveal(".scroll-down-delay-2", { delay: 550 });
  ScrollDown.reveal(".scroll-down-delay-3", { delay: 650 });
  ScrollDown.reveal(".scroll-down-delay-4", { delay: 750 });





  const ScrollTop = ScrollReveal({
    duration: 960,
    distance: "50px",
    origin: "bottom",
    easing: "ease-out",
    reset: false,
  });
  ScrollTop.reveal(".scroll-top", { delay: 350 });



  const ScrollLeft = ScrollReveal({
    origin: "left",
    distance: "50px",
    duration: 690,
    reset: false,
    easing: "ease-out",
  });
  ScrollLeft.reveal(".scroll-left", { delay: 10 });

  const ScrollRight = ScrollReveal({
    origin: "right",
    distance: "50px",
    duration: 690,
    reset: false,
    easing: "ease-out",
  });
  ScrollRight.reveal(".scroll-right", { delay: 250 });
  ScrollRight.reveal(".scroll-right-delay-1", { delay: 30 });

});
const hamburger = document.querySelector("#nav-icon");
hamburger.addEventListener("click", function () {
  document.querySelector(".side-nav-list").classList.toggle("slide-in");
  document.querySelector(".hamburger").classList.toggle("close-nav");
});


const scrollTopBtn = document.querySelector('#scrollTop')
if (scrollTopBtn) {
  scrollTopBtn.addEventListener('click', function (event) {
    event.preventDefault()
    window.scrollTo(0, 0,)
  })
  window.addEventListener('scroll', function () {
    if (window.pageYOffset >= 1200) {
      scrollTopBtn.classList.add('active')
    } else {
      scrollTopBtn.classList.remove('active')
    }
  })
}

const redDot = () => {
  const rows = Array.from(document.querySelectorAll(".timeline-scroll .items > .item"));
  const redCont = document.querySelector(".red-dot");
  const cont = redCont.querySelector('.cont');

  const n = rows.length;
  const maxPos = rows[n - 1].getBoundingClientRect().top;

  redCont.style.height = `${maxPos + 40}px`;
  cont.style.top = `${maxPos + 10}px`;

  rows.forEach((row, i) => {
    const pos = row.getBoundingClientRect().top;
    cont.style.top = `${pos + 10}px`;
  });
};
redDot();




