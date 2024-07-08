document.addEventListener("DOMContentLoaded", () => {
  
// gsap code here!
gsap.registerPlugin(ScrollTrigger);

// const showAnim = gsap.from('.main-tool-bar', { 
//   yPercent: -100,
//   paused: true,
//   duration: 0.2
// }).progress(1);

// ScrollTrigger.create({
//   start: "top top",
//   end: "top 1px",
// //    onEnter: showCube,
// //     onEnterBack: showCube
// //   end: "max",
//   onUpdate: (self) => {
//     self.direction === -1 ? showAnim.play() : showAnim.reverse()
//   }
// });
  
ScrollTrigger.create({
  start: 'top -80',
  end: 99999,
  toggleClass: {className: 'main-tool-bar--scrolled', targets: '.main-tool-bar'}
});

});