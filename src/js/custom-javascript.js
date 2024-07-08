document.addEventListener("DOMContentLoaded", () => {
  
// AOS
AOS.init();

// GSAP
gsap.registerPlugin(ScrollTrigger);

// DISSAPPEARING NAV
ScrollTrigger.create({
  start: 'top -80',
  end: 99999,
  toggleClass: {className: 'main-tool-bar--scrolled', targets: '.main-tool-bar'}
});


});