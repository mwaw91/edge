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
      0: {
        spaceBetween: 30,
      },
      480: {
        spaceBetween: 30,
      },
      767: {
        spaceBetween: 40,
      },
      992: {
        spaceBetween: 40,
      }
    },
  });
  // END SWIPER CAROUSERL


  // STICKY NAV
  // function stickyNav() {
  //   let menu = document.getElementById('header');
  //   // let offset = menu.offsetHeight;
  //   // window.onscroll = function () {
  //   //   if (window.scrollY > offset - 10) {
  //   //     menu.classList.add("sticky");
  //   //   } else if (window.scrollY < offset - 20) {
  //   //     menu.classList.remove("sticky");
  //   //   }
  //   // }
  //   // keep track of previous scroll position
  //   let prevScrollPos = window.pageYOffset;
  // }

  // function stickyNav() {
  //   let lastScrollTop = 0;

  //   window.addEventListener('scroll', function () {
  //     let header = document.getElementById('header');
  //     let scrollTop = window.scrollY || document.documentElement.scrollTop;

  //     if (scrollTop >= lastScrollTop) {
  //       // Scrolling down
  //       header.classList.remove('sticky');
  //     } else {
  //       // Scrolling up
  //       header.classList.add('sticky');
  //     }

  //     // HAS BG IF MORE THAN INITIAL POSITION
  //     if (scrollTop > 102) {
  //       header.classList.add('has-bg');
  //     } else {
  //       header.classList.remove('has-bg');
  //     }

  //     lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
  //   }, false);
  // }
  // stickyNav();


  // TESTIMONIALS
  const testimonials = new Swiper('.testimonials', {
    // slidesPerView: 3.6,
    // slidesPerColumn: 2,
    // slidesPerGroup: 3,
    // spaceBetween: 30,
    // speed: 1500,
    // grid: {
    //   rows: 2, // your amount of slides
    //   fill: "row",
    // },
    grabCursor: true,
    spaceBetween: 20,
    slidesPerView: 1.2,
    speed: 1500,


    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // BREAKPOINTS
    breakpoints: {
      // >=
      320: {
        // autoplay: {
        //   delay: 10000,
        //   speed: 1000,
        // },
      },

      // 639: {
      //   slidesPerView: 1,
      //   slidesPerColumn: 1,
      //   slidesPerGroup: 1,
      //   spaceBetween: 40,
      //   grid: {
      //     rows: 1, // your amount of slides
      //     fill: "row",
      //   },
      // },
      768: {
        slidesPerView: 2.4,
        slidesPerColumn: 2,
        slidesPerGroup: 3,
        spaceBetween: 30,
        grid: {
          rows: 2, // your amount of slides
          fill: "row",
        },
        // autoplay: {
        //   delay: 45000,
        //   speed: 3000,
        // },
      },
      1024: {
        slidesPerView: 3.6,
        slidesPerColumn: 2,
        slidesPerGroup: 3,
        spaceBetween: 30,
        grid: {
          rows: 2, // your amount of slides
          fill: "row",
        },
      }
    }
    // END BREAKPOINTS
  });

  // AOS
  AOS.init({
    // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    offset: 0, // offset (in px) from the original trigger point
    // delay: 0, // values from 0 to 3000, with step 50ms
    duration: 600, // values from 0 to 3000, with step 50ms
    easing: 'ease-out', // default easing for AOS animations
  });

  // GSAP
  gsap.registerPlugin(ScrollTrigger);

  // DISAPPEARING NAV
  ScrollTrigger.create({
    start: 'top -1px',
    // markers: true,
    end: 99999,
    toggleClass: { className: 'skybox-menu--scrolled', targets: '.skybox-menu' }
  });

  // LOGO CAROUSEL STARTS WHEN IN VIEW
  gsap.to("#stat-container", {
    scrollTrigger: {
      trigger: ".logo-ticker-container",
      toggleActions: "play pause reverse reset",
      start: "top 120%",
      end: "top -20%",
      // markers: true,
      toggleClass: 'enable'
    },
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
  // function statGradient() {
  //   var gradient = document.querySelector('.stat-gradient');
  //   var statConstainer = document.getElementById('stat-container');
  //   // statConstainer.addEventListener('mousemove', function (e) {
  //   document.addEventListener('mousemove', function (e) {
  //     var x = e.clientX;
  //     var y = e.clientY;
  //     gradient.style.transform = `translate3d(calc(${e.clientX}px), calc(${e.clientY}px), 0)`
  //   });
  // }
  // statGradient();

  // BTN HOVER GRADIENT
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

  // IMAGE TABS
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
  // teamIndividual();

  // PRICING ANNUAL MONTHLY
  function monthlyAnnually() {
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
        switchBtn.classList.toggle('active');

        const parentDiv = switchBtn.closest('.tier');

        // Find the h3 elements inside the parent div
        const monthElement = parentDiv.querySelectorAll('.month');
        const yearElement = parentDiv.querySelectorAll('.year');
        // console.log(monthElement)
        // console.log(yearElement)
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
  // monthlyAnnually();

  // NEW MONTHLY ANNUALLY TOGGLE
  function monthlyAnnuallyPriceToggle() {


    // get toggle button 
    // on click hide the other one
    // activate relavant feature grid
    // hide other grid
    let annualSwitch = document.querySelectorAll('.custom-toggle-switch');
    annualSwitch.forEach(switchBtn => {

      // init
      // const parentDivInit = switchBtn.closest('.tier');
      // const monthElementInit = parentDivInit.querySelectorAll('.month');
      // const yearElementInit = parentDivInit.querySelectorAll('.year');
      // if (switchBtn.classList.contains('active')) {
      //   monthElementInit.forEach(monthEl => {
      //     // monthEl.style.display = 'none';
      //     monthEl.classList.toggle('hide')
      //   })
      //   yearElementInit.forEach(yearEl => {
      //     // yearEl.style.display = 'block';
      //     yearEl.classList.toggle('show')
      //   })
      // } else {
      //   monthElementInit.forEach(monthEl => {
      //     // monthEl.style.display = 'block';
      //     monthEl.classList.toggle('show')
      //   })
      //   // yearElement.forEach(yearEl, function () {
      //   yearElementInit.forEach(yearEl => {
      //     // yearEl.style.display = 'none';
      //     yearEl.classList.toggle('hide')
      //   })
      // }
      // end init

      switchBtn.addEventListener('click', () => {
        switchBtn.classList.toggle('active');

        const parentDiv = switchBtn.closest('.tier');

        // Find the h3 elements inside the parent div
        const monthElement = parentDiv.querySelectorAll('.month');
        const yearElement = parentDiv.querySelectorAll('.year');
        // console.log(monthElement)
        // console.log(yearElement)
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
  monthlyAnnuallyPriceToggle()

  // NEW PRICING TEAM INDIVIDUAL TOGGLE
  function teamIndividualToggle() {
    // TOGGLE BUTTONS
    let team = document.getElementById('team');
    let individual = document.getElementById('individual');

    // TOGGLABLE TIER CONTAINERS
    const individualTiers = document.querySelector('.tiers-container-individual');
    const teamTiers = document.querySelector('.tiers-container-team');

    // TOGGLABLE FEATURE TABLES
    const individualFeatureTable = document.querySelector('.pricing-table-container-desktop-individual');
    const teamFeatureTable = document.querySelector('.pricing-table-container-desktop-team');

    // CHECK WHICH ONE I CLICKED
    function toggleActive(clickedSpan, otherSpan) {
      if (!clickedSpan.classList.contains('active')) {
        clickedSpan.classList.add('active');
        otherSpan.classList.remove('active');
      }
    }
    // ON CLICK
    individual.addEventListener('click', function () {
      toggleActive(individual, team);

      individualFeatureTable.classList.add('show');
      individualFeatureTable.classList.remove('hide');
      teamFeatureTable.classList.add('hide');
      teamFeatureTable.classList.remove('show');

      if (individualTiers.classList.contains('active')) {
        teamTiers.classList.remove('active');
      } else {
        teamTiers.classList.remove('active');
        individualTiers.classList.add('active');
      }
    });

    team.addEventListener('click', function () {
      toggleActive(team, individual);

      teamFeatureTable.classList.add('show');
      teamFeatureTable.classList.remove('hide');
      individualFeatureTable.classList.add('hide');
      individualFeatureTable.classList.remove('show');

      if (teamTiers.classList.contains('active')) {
        individualTiers.classList.remove('active');
      } else {
        teamTiers.classList.add('active');
        individualTiers.classList.remove('active');
      }
    });

  }
  teamIndividualToggle()

  // ASSIST OR INIT VIDEOS
  // function clickBody() {
  //   let h1 = document.querySelector('h1');
  //   document.body.click();
  //   h1.click();
  //   console.log('window.onload = clickBody;');
  // }
  // clickBody();


  // CUSTOM PLAY BUTTON FOR VIDEOS
  // function customPlayButton() {

  //   const playButtons = document.querySelectorAll(".play-button");

  //   playButtons.forEach(playButton => {

  //     const parentDiv = playButton.closest('.video-container');
  //     const siblingVideo = parentDiv.querySelector('.feature-video');
  //     playButton.addEventListener("mouseenter", function () {
  //       if (siblingVideo.paused) {
  //         // console.log('video was paused now playing');
  //         siblingVideo.play();
  //         // siblingVideo.muted = !siblingVideo.muted;
  //         playButton.classList.add('hide');
  //         playButton.classList.remove('show');
  //       } else {
  //         // console.log('video was playing now paused');
  //         siblingVideo.pause();
  //         playButton.classList.remove('hide')
  //         playButton.classList.add('show')
  //       }
  //     });
  //     playButton.addEventListener("mouseleave", function () {
  //       if (!siblingVideo.paused) {
  //         siblingVideo.pause();
  //         siblingVideo.currentTime = 0;
  //         // siblingVideo.muted;
  //         playButton.classList.remove('hide')
  //         playButton.classList.add('show')
  //       }
  //     });
  //   })
  // }
  // customPlayButton();

  // HERO
  function HeroCustomPlayButton() {

    const playButtons = document.querySelectorAll(".play-button");

    playButtons.forEach(playButton => {

      const parentDiv = playButton.closest('.video-container');
      const siblingVideo = parentDiv.querySelector('.feature-video');

      playButton.addEventListener("click", function () {
        if (siblingVideo.paused) {
          // console.log('video was paused now playing');
          siblingVideo.play();
          // siblingVideo.muted = !siblingVideo.muted;
          playButton.classList.add('hide');
          playButton.classList.remove('show');
        } else {
          // console.log('video was playing now paused');
          siblingVideo.pause();
          siblingVideo.currentTime = 0;
          playButton.classList.remove('hide')
          playButton.classList.add('show')
        }
      });
    })
  }
  HeroCustomPlayButton();

  function hamburgerNav() {
    const hamburger = document.querySelector('.hamburger');
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active')
      document.body.classList.toggle('nav-opened');
    })
  }
  hamburgerNav()

  // MOBILE PRICING TABLES
  function viewMobilePricingFeatures() {
    const allFeaturesBtns = document.querySelectorAll('.all-features-mobile-btn');
    allFeaturesBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('active');
      })
    })
  }
  viewMobilePricingFeatures()

  // DESKTOP PRICING TABLE
  function viewDesktopPricingFeatures() {
    const allFeaturesBtn = document.querySelector('.all-features-desktop-btn');
    const pricingTablesDesktop = document.querySelectorAll('pricing-table-container-desktop');
    allFeaturesBtn.addEventListener('click', () => {
      allFeaturesBtn.classList.toggle('active');

      pricingTablesDesktop.forEach(table => {
        table.classList.toggle('show');
      })

      // pricingTableDesktop.classList.toggle('show');
    })
  }
  viewDesktopPricingFeatures()


});

