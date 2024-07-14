document.addEventListener("DOMContentLoaded", () => {

  // SWIPER
  // import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

  // SWIPER CARUSERL
  var logoCarousel = new Swiper('.logo-slider', {
    spaceBetween: 40,
    grabCursor: false,
    a11y: false,
    freeMode: true,
    speed: 11000,
    loop: true,
    slidesPerView: 5,
    autoplay: {
      delay: 0,
      disableOnInteraction: true,
    },
    breakpoints: {
      0: { /* when window >=0px - webflow mobile landscape/portriat */
        spaceBetween: 30,
      },
      480: { /* when window >=0px - webflow mobile landscape/portriat */
        spaceBetween: 30,
      },
      767: { /* when window >= 767px - webflow tablet */
        spaceBetween: 40,
      },
      992: { /* when window >= 988px - webflow desktop */
        spaceBetween: 40,
      }
    },
  });
  // end SWIPER CARoUSERL
  // LOGO CAROUSEL
  // var logoCarousel = new Swiper(".logo-carousel", {
  //   slidesPerView: "auto",
  //   grabCursor: true,
  //   speed: 5000,
  //   spaceBetween: 30,
  //   freeMode: true,
  //   loop: true,
  //   centeredSlides: true,
  //   autoplay: {
  //     delay: 0,
  //     disableOnInteraction: true
  //   }
  // });
  // test slider
  // function testSlider() {
  //   const root = document.documentElement;
  //   const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
  //   const marqueeContent = document.querySelector("ul.marquee-content");

  //   root.style.setProperty("--marquee-elements", marqueeContent.children.length);

  //   for (let i = 0; i < marqueeElementsDisplayed; i++) {
  //     marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
  //   }
  // }
  // testSlider()

  const testimonials = new Swiper('.testimonials', {
    // slidesPerView: 3.2,
    slidesPerView: 3.6,
    slidesPerColumn: 2,
    slidesPerGroup: 3,
    spaceBetween: 30,
    speed: 1500,
    // slidesOffsetBefore: 30,
    // slidesOffsetBefore: 62,
    grid: {
      rows: 2, // your amount of slides
      fill: "row",
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // AOS
  AOS.init({
    // Global settings:
    // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    // startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    // initClassName: 'aos-init', // class applied after initialization
    // animatedClassName: 'aos-animate', // class applied on animation
    // useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    // disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    // debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    // throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    // offset: 120, // offset (in px) from the original trigger point
    // delay: 0, // values from 0 to 3000, with step 50ms
    duration: 600, // values from 0 to 3000, with step 50ms
    easing: 'ease-out', // default easing for AOS animations
    // once: false, // whether animation should happen only once - while scrolling down
    // mirror: false, // whether elements should animate out while scrolling past them
    // anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

  });

  // GSAP
  gsap.registerPlugin(ScrollTrigger);

  // DISSAPPEARING NAV
  ScrollTrigger.create({
    //   start: 'top -80',
    start: 'top -1px',
    // markers: true,
    end: 99999,
    toggleClass: { className: 'skybox-menu--scrolled', targets: '.skybox-menu' }
    // toggleClass: { className: 'skybox-menu--scrolled', targets: '.video-section' }
  });

  // BACK TO TOP BTN
  function backtoTop() {

    let mybutton = document.querySelector(".back-to-top");

    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.classList.add('show');
      } else {
        mybutton.classList.remove('show');
      }
    }
  }
  backtoTop();

  // FOLLOW GRADIENT
  function statGradient() {
    var gradient = document.querySelector('.stat-gradient');
    var statConstainer = document.getElementById('stat-container');
    // statConstainer.addEventListener('mousemove', function (e) {
    document.addEventListener('mousemove', function (e) {
      var x = e.clientX;
      var y = e.clientY;
      gradient.style.transform = `translate3d(calc(${e.clientX}px), calc(${e.clientY}px), 0)`
    });
  }
  // statGradient();

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

  // PRICING INDIVDUAL TEAM
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
          if (element.classList.contains('team')) {
            // element.style.display = "none";
            element.classList.remove('must-be-hidden');
            element.classList.add('must-be-shown');
          } else {
            // element.style.display = "block";
            element.classList.add('must-be-hidden');
            element.classList.remove('must-be-shown');
          }
        });
      }

      if (individual.classList.contains('active')) {
        prices.forEach(element => {
          if (element.classList.contains('individual')) {
            // element.style.display = "none";
            element.classList.add('must-be-shown');
            element.classList.remove('must-be-hidden');
          } else {
            // element.style.display = "block";
            element.classList.add('must-be-hidden');
            element.classList.remove('must-be-shown');
          }
        });
      }
    }
    checkBilling();

  }
  teamIndividual();

  // PRICING ANNUAL MONTHLY
  function monthlyAnnually() {
    console.log('test');
    let annualSwitch = document.querySelectorAll('.custom-toggle-switch');
    annualSwitch.forEach(switchBtn => {

      // init
      const parentDivInit = switchBtn.closest('.tier');
      const monthElementInit = parentDivInit.querySelectorAll('.month');
      const yearElementInit = parentDivInit.querySelectorAll('.year');
      if (switchBtn.classList.contains('active')) {
        monthElementInit.forEach(monthEl => {
          // monthEl.style.display = 'none';
          monthEl.classList.toggle('hide')
        })
        yearElementInit.forEach(yearEl => {
          // yearEl.style.display = 'block';
          yearEl.classList.toggle('show')
        })
      } else {
        monthElementInit.forEach(monthEl => {
          // monthEl.style.display = 'block';
          monthEl.classList.toggle('show')
        })
        // yearElement.forEach(yearEl, function () {
        yearElementInit.forEach(yearEl => {
          // yearEl.style.display = 'none';
          yearEl.classList.toggle('hide')
        })
      }
      // end init

      switchBtn.addEventListener('click', () => {
        console.log('test');
        switchBtn.classList.toggle('active');

        const parentDiv = switchBtn.closest('.tier');

        // Find the h3 elements inside the parent div
        const monthElement = parentDiv.querySelectorAll('.month');
        const yearElement = parentDiv.querySelectorAll('.year');
        console.log(monthElement)
        console.log(yearElement)
        // Toggle visibility of 'month' and 'year' h3 elements
        if (switchBtn.classList.contains('active')) {
          monthElement.forEach(monthEl => {
            // monthEl.style.display = 'none';
            monthEl.classList.toggle('hide')
            monthEl.classList.toggle('show')
          })
          yearElement.forEach(yearEl => {
            // yearEl.style.display = 'block';
            yearEl.classList.toggle('show')
            yearEl.classList.toggle('hide')
          })
        } else {
          monthElement.forEach(monthEl => {
            // monthEl.style.display = 'block';
            monthEl.classList.toggle('show')
            monthEl.classList.toggle('hide')
          })
          yearElement.forEach(yearEl => {
            // yearEl.style.display = 'none';
            yearEl.classList.toggle('hide')
            yearEl.classList.toggle('show')
          })
        }
      });
    });

  }
  monthlyAnnually();


  // CUSTOM PLAY BUTTON FOR VIDEOS
  function customPlayButton() {

    const playButtons = document.querySelectorAll(".play-button");

    playButtons.forEach(playButton => {

      const parentDiv = playButton.closest('.video-container');
      const siblingVideo = parentDiv.querySelector('.feature-video');
      playButton.addEventListener("mouseenter", function () {
        if (siblingVideo.paused) {
          console.log('video was paused now playing');
          siblingVideo.play();
          siblingVideo.muted = !siblingVideo.muted;
          playButton.classList.add('hide');
          playButton.classList.remove('show');
        } else {
          console.log('video was playing now paused');
          siblingVideo.pause();
          playButton.classList.remove('hide')
          playButton.classList.add('show')
        }
      });
      playButton.addEventListener("mouseleave", function () {
        if (!siblingVideo.paused) {
          siblingVideo.pause();
          siblingVideo.muted;
          playButton.classList.remove('hide')
          playButton.classList.add('show')
        }
      });
    })
  }
  customPlayButton();

  // HERO
  function HeroCustomPlayButton() {

    const playButtons = document.querySelectorAll(".hero-play-button");

    playButtons.forEach(playButton => {

      const parentDiv = playButton.closest('.video-container');
      const siblingVideo = parentDiv.querySelector('.feature-video');

      playButton.addEventListener("click", function () {
        if (siblingVideo.paused) {
          console.log('video was paused now playing');
          siblingVideo.play();
          siblingVideo.muted = !siblingVideo.muted;
          playButton.classList.add('hide');
          playButton.classList.remove('show');
        } else {
          console.log('video was playing now paused');
          siblingVideo.pause();
          playButton.classList.remove('hide')
          playButton.classList.add('show')
        }
      });
    })
  }
  HeroCustomPlayButton();
});