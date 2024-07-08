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


// FOLLOW GRADIENT
var cursor = document.querySelector('.blob');
document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

});