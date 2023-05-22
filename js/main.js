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




