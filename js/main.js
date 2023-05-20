"use strict";
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
    if (window.pageYOffset >= 900) {
      scrollTopBtn.classList.add('active')
    } else {
      scrollTopBtn.classList.remove('active')
    }
  })
}






