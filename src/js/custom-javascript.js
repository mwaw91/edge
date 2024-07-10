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


    slidesPerView: 3.2,
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



  function btnHoverGradient() {

    let btns = document.querySelectorAll('.btn--outline-grey-gradient');
    btns.forEach(btn => {
      btn.addEventListener('mousemove', e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        btn.style.setProperty('--x', x + 'px');
        btn.style.setProperty('--y', y + 'px');
      });
    });
  }
  btnHoverGradient();

  function openImageTab() {
    const buttons = document.querySelectorAll('.image-toggle');
    const images = document.querySelectorAll('.tab-image');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        images.forEach(img => img.classList.remove('active'));
        const correspondingImage = document.getElementById(button.classList[0]);
        if (correspondingImage) {
          correspondingImage.classList.add('active');
        }
      });
    });
  }
  openImageTab();

  // PRICING TEAM INDIVDUAL
  function teamIndividual() {
    let team = document.getElementById('team');
    let individual = document.getElementById('individual');
    let prices = document.querySelectorAll('.price');

    function toggleActive(clickedSpan, otherSpan) {
      if (!clickedSpan.classList.contains('active')) {
        clickedSpan.classList.add('active');
        otherSpan.classList.remove('active');
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
  teamIndividual();

  // PRICING ANNUAL MONTHLY
  function monthlyAnnually() {
    console.log('TEST')
    // Get all elements with class 'annual-switch'
    const switches = document.querySelectorAll('.annual-switch');
    console.log(switches);
    // Loop through each switch
    switches.forEach(switchInput => {
      // Add click event listener to each switch
      switchInput.addEventListener('click', function () {
        // Get the parent div with class 'tier'
        const parentDiv = this.closest('.tier');

        // Find the h3 elements inside the parent div
        const monthElement = parentDiv.querySelector('.month');
        const yearElement = parentDiv.querySelector('.year');

        // Toggle visibility of 'month' and 'year' h3 elements
        if (this.checked) {
          monthElement.style.display = 'block';
          yearElement.style.display = 'block';
        } else {
          monthElement.style.display = 'none';
          yearElement.style.display = 'none';
        }
      });
    });

  }
  monthlyAnnually();
});