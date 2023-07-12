"use strict";
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
  ScrollLeft.reveal(".scroll-left", { delay: 350 });

  const ScrollRight = ScrollReveal({
    origin: "right",
    distance: "50px",
    duration: 690,
    reset: false,
    easing: "ease-out",
  });
  ScrollRight.reveal(".scroll-right", { delay: 350 });
  ScrollRight.reveal(".scroll-right-delay-1", { delay: 30 });

});
$(document).ready(function () {
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
  });
$(document).ready(function() {
  var customContainer = jQuery(".iso-container");
  customContainer.isotope({
    itemSelector: '.custom-post',
    layoutMode: 'fitRows'
  });

  jQuery("#custom-filter li:first-child > a").addClass("is-checked");

  jQuery("#custom-filter a").click(function() {
    jQuery("#custom-filter .is-checked").removeClass("is-checked");
    jQuery(this).addClass("is-checked");

    var customSelector = jQuery(this).attr("data-filter");
    customContainer.isotope({
      filter: customSelector
    });
    return false;
  });

  const links = document.querySelectorAll('li a');
  
  links.forEach(link => {
    link.addEventListener('click', () => {
      links.forEach(link => {
        link.classList.remove('active-cases');
      });
      link.classList.add('active-cases');
    });
  });
});

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
window.addEventListener('load', () => {
  function parallax() {
    const parallaxImages = document.querySelectorAll('.parallax-image');

    parallaxImages.forEach((parallaxImage) => {
      const img = parallaxImage.querySelector('img');
      const windowTop = window.pageYOffset;
      const windowHeight = window.innerHeight;
      const windowBottom = windowTop + windowHeight;
      const imageTop = parallaxImage.offsetTop;
      const imageHeight = parallaxImage.offsetHeight;
      const imageBottom = imageTop + imageHeight;

      if (!(imageTop > windowBottom || imageBottom < windowTop)) {
        const sub = imageTop - windowTop;
        if (sub >= 0) {
          img.style.transform = `scaleX(${sub / 2100 + 1})`;
          img.style.width = '100vw';
        } else {
          img.style.transform = `scaleX(1) translateY(${-sub / 2}px)`;
        }
      }
    });
  }

  parallax();
  window.addEventListener('scroll', () => {
    parallax();
  });
  window.addEventListener('resize', () => {
    parallax();
  });
});

$(document).ready(function() {
  window.addEventListener('scroll', function() {
    let stickySidebar = document.querySelector('#stickySidebar');
    let rect = stickySidebar.getBoundingClientRect();
    let topOffset = rect.top;
  
    if (topOffset <= 0) {
      stickySidebar.classList.add('sticky-sidebar');
    } else {
      stickySidebar.classList.remove('sticky-sidebar');
    }
  });
  });
  
const hamburger = document.querySelector("#nav-icon");
hamburger.addEventListener("click", function () {
  document.querySelector(".side-nav-list").classList.toggle("slide-in");
  document.querySelector(".hamburger").classList.toggle("close-nav");
});
// Obtém uma lista de todos os elementos de imagem
const images = document.querySelectorAll('.img-random img');

// Cria um array com os URLs das imagens
const imageUrls = Array.from(images, (image) => image.src);

// Inicia o temporizador para atualizar as imagens a cada 5 segundos
setInterval(() => {
  // Embaralha o array de URLs das imagens
  const shuffledImageUrls = shuffleArray(imageUrls);

  // Atualiza as imagens com os URLs embaralhados
  images.forEach((image, index) => {
    image.src = shuffledImageUrls[index];
  });
}, 8000);

// Função para embaralhar um array
function shuffleArray(array) {
  let currentIndex = array.length;
  let temporaryValue, randomIndex;

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
const toggleButton = document.querySelector('#toggleButton');
const frontContainer = document.querySelector('.front-container');
const toggleIcon = document.querySelector('#toggleIcon');
const isOpen = true;

toggleButton.addEventListener('click', ()=> {
  if (frontContainer.style.gap === '0px') {
    frontContainer.style.gap = '50px';
    toggleIcon.className = 'fas fa-hand-point-up';
    isOpen = true;
  } else {
    frontContainer.style.gap = '0';
    toggleIcon.className = 'fas fa-times';
    isOpen = false;
  }
});

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



