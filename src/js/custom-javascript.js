document.addEventListener("DOMContentLoaded", () => {

  // SWIPER
  // import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

  // const swiper = new Swiper('.swiper', { 
  // //   loop: true,
  // slidesPerView: 6,
  // slidesPerColumn: 2,
  // slidesPerGroup: 3,

  //   // Navigation arrows
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  //   },
  // });


  const mySwiper = new Swiper('.swiper', {
    loop: true,

    grid: {
      rows: 2, // your amount of slides
      fill: "row",
    },


    slidesPerView: 3,
    slidesPerColumn: 2,
    slidesPerGroup: 3,
    // spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // pagination: {
    //   el: '.swiper-pagination',
    //   clickable: true,
    // },
    // on: {
    //   init: function () {},
    //   orientationchange: function(){},
    //   beforeResize: function(){
    //     let vw = window.innerWidth;
    //     if(vw > 1000){
    //       mySwiper.params.slidesPerView = 3
    //         mySwiper.params.slidesPerColumn = 3
    //         mySwiper.params.slidesPerGroup = 3;
    //     } else {
    //       mySwiper.params.slidesPerView = 4
    //         mySwiper.params.slidesPerColumn = 2
    //         mySwiper.params.slidesPerGroup =4;
    //     }
    //     mySwiper.init();
    //   },
    // },
  });





  // AOS
  AOS.init();

  // GSAP
  gsap.registerPlugin(ScrollTrigger);

  // DISSAPPEARING NAV
  ScrollTrigger.create({
    //   start: 'top -80',
    start: 'top -1px',
    end: 99999,
    toggleClass: { className: 'main-tool-bar--scrolled', targets: '.main-tool-bar' }
  });


  // FOLLOW GRADIENT
  // var cursor = document.querySelector('.blob');
  // document.addEventListener('mousemove', function(e){
  //   var x = e.clientX;
  //   var y = e.clientY;
  //   cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
  // });

  // TABS
  function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("tab-image");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
  }


  function monthlyYearly() {
    let team = document.getElementById('team');
    let individual = document.getElementById('individual');
    let prices = document.querySelectorAll('.price');
    //    let toggles = document.querySelectorAll('.pricing-toggle');

    function toggleActive(clickedSpan, otherSpan) {
      if (!clickedSpan.classList.contains('active')) {
        clickedSpan.classList.add('active');
        otherSpan.classList.remove('active');

        // if (team.classList.contains('active')) {
        //   prices.forEach(element => {
        //     if (!element.classList.contains('team')) {
        //       element.style.display = "none";
        //     } else {
        //       element.style.display = "block";
        //     }
        //   });
        // }

        // if (individual.classList.contains('active')) {
        //   prices.forEach(element => {
        //     if (!element.classList.contains('individual')) {
        //       element.style.display = "none";
        //     } else {
        //       element.style.display = "block";
        //     }
        //   });
        // }
        checkBilling();
      }
    }
    team.addEventListener('click', function () {
      toggleActive(team, individual);
    });
    individual.addEventListener('click', function () {
      toggleActive(individual, team);
    });


    function checkBilling() {
      if (team.classList.contains('active')) {
        prices.forEach(element => {
          if (!element.classList.contains('team')) {
            element.style.display = "none";
          } else {
            element.style.display = "block";
          }
        });
      }

      if (individual.classList.contains('active')) {
        prices.forEach(element => {
          if (!element.classList.contains('individual')) {
            element.style.display = "none";
          } else {
            element.style.display = "block";
          }
        });
      }
    }
    checkBilling();

  }
  monthlyYearly();
});