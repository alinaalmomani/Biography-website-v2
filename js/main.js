AOS.init({
  duration: 800,
  easing: 'slide'
});

(function ($) {
  
  "use strict";
  $('.navbar-nav a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
  });

  $(document).on('click', function (event) {
    var clickover = $(event.target);
    var opened = $('.navbar-collapse').hasClass('show');
    if (opened && !clickover.hasClass('navbar-toggler')) {
      $('.navbar-collapse').collapse('hide');
    }
  });
  var scrollPosition = 0;
  $(window).on('scroll', function () { 
    var currentScrollPosition = $(this).scrollTop();
    if (currentScrollPosition > scrollPosition) {
      $('html, body').stop();
    } else {
      $('html, body').stop();
    }
    scrollPosition = currentScrollPosition;
  });
  $(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


  var fullHeight = function () {

    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function () {
      $('.js-fullheight').css('height', $(window).height());
    });

  };
  fullHeight();

  // loader
  var loader = function () {
    setTimeout(function () {
      if ($('#ftco-loader').length > 0) {
        $('#ftco-loader').removeClass('show');
      }
    }, 1);
  };
  loader();

  // Scrollax
  $.Scrollax();



  // Burger Menu
  var burgerMenu = function () {

    $('body').on('click', '.js-fh5co-nav-toggle', function (event) {

      event.preventDefault();

      if ($('#ftco-nav').is(':visible')) {
        $(this).removeClass('active');
      } else {
        $(this).addClass('active');
      }



    });

  };
  burgerMenu();


  var onePageClick = function () {


    $(document).on('click', '#ftco-nav a[href^="#"]', function (event) {
      event.preventDefault();

      var href = $.attr(this, 'href');

      $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 70
      }, 500, function () {
        // window.location.hash = href;
      });
    });

  };

  onePageClick();


  var carousel = function () {
    $('.home-slider').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 0,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: false,
      autoplayHoverPause: false,
      items: 1,
      navText: ["<span class='ion-md-arrow-back'></span>", "<span class='ion-chevron-right'></span>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
  };
  carousel();

  $('nav .dropdown').hover(function () {
    var $this = $(this);
    // 	 timer;
    // clearTimeout(timer);
    $this.addClass('show');
    $this.find('> a').attr('aria-expanded', true);
    // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
    $this.find('.dropdown-menu').addClass('show');
  }, function () {
    var $this = $(this);
    // timer;
    // timer = setTimeout(function(){
    $this.removeClass('show');
    $this.find('> a').attr('aria-expanded', false);
    // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
    $this.find('.dropdown-menu').removeClass('show');
    // }, 100);
  });


  $('#dropdown04').on('show.bs.dropdown', function () {
    console.log('show');
  });

  // scroll
  var scrollWindow = function () {
    $(window).scroll(function () {
      var $w = $(this),
        st = $w.scrollTop(),
        navbar = $('.ftco_navbar'),
        sd = $('.js-scroll-wrap');

      if (st > 150) {
        if (!navbar.hasClass('scrolled')) {
          navbar.addClass('scrolled');
        }
      }
      if (st < 150) {
        if (navbar.hasClass('scrolled')) {
          navbar.removeClass('scrolled sleep');
        }
      }
      if (st > 350) {
        if (!navbar.hasClass('awake')) {
          navbar.addClass('awake');
        }

        if (sd.length > 0) {
          sd.addClass('sleep');
        }
      }
      if (st < 350) {
        if (navbar.hasClass('awake')) {
          navbar.removeClass('awake');
          navbar.addClass('sleep');
        }
        if (sd.length > 0) {
          sd.removeClass('sleep');
        }
      }
    });
  };
  scrollWindow();



  var counter = function () {

    $('#section-counter, .hero-wrap, .ftco-counter').waypoint(function (direction) {

      if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
        $('.number').each(function () {
          var $this = $(this),
            num = $this.data('number');
          console.log(num);
          $this.animateNumber(
            {
              number: num,
              numberStep: comma_separator_number_step
            }, 7000
          );
        });

      }

    }, { offset: '95%' });

  }
  counter();


  var contentWayPoint = function () {
    var i = 0;
    $('.ftco-animate').waypoint(function (direction) {

      if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

        i++;

        $(this.element).addClass('item-animate');
        setTimeout(function () {

          $('body .ftco-animate.item-animate').each(function (k) {
            var el = $(this);
            setTimeout(function () {
              var effect = el.data('animate-effect');
              if (effect === 'fadeIn') {
                el.addClass('fadeIn ftco-animated');
              } else if (effect === 'fadeInLeft') {
                el.addClass('fadeInLeft ftco-animated');
              } else if (effect === 'fadeInRight') {
                el.addClass('fadeInRight ftco-animated');
              } else {
                el.addClass('fadeInUp ftco-animated');
              }
              el.removeClass('item-animate');
            }, k * 50, 'easeInOutExpo');
          });

        }, 100);

      }

    }, { offset: '95%' });
  };
  contentWayPoint();

  // magnific popup
  $('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      "<i class='fa fa-caret-left'></i>",
      "<i class='fa fa-caret-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  })
  $('.read_more_2018').click(function () {
    $('.moretext-2018').slideToggle();
    if (this.innerText == "Read More") {
      this.innerText = "Read Less";
    } else {
      this.innerText = "Read More";
    }
  });
  $('.read_more_2019').click(function () {
    $('.moretext-2019').slideToggle();
    if (this.innerText == "Read More") {
      this.innerText = "Read Less";
    } else {
      this.innerText = "Read More";
    }
  });
  $('.read_more_2020').click(function () {
    $('.moretext-2020').slideToggle();
    if (this.innerText == "Read More") {
      this.innerText = "Read Less";
    } else {
      this.innerText = "Read More";
    }
  });
  $('.read_more_2021').click(function () {
    $('.moretext-2021').slideToggle();
    if (this.innerText == "Read More") {
      this.innerText = "Read Less";
    } else {
      this.innerText = "Read More";
    }
  });
  $('.read_more_2022').click(function () {
    $('.moretext-2022').slideToggle();
    if (this.innerText == "Read More") {
      this.innerText = "Read Less";
    } else {
      this.innerText = "Read More";
    }
  });
  $('.read_more_2023').click(function () {
    $('.moretext-2023').slideToggle();
    if (this.innerText == "Read More") {
      this.innerText = "Read Less";
    } else {
      this.innerText = "Read More";
    }
  });
  $('.year__controls li').on('click', function () {
    $('.year__controls li').removeClass('active');
    $(this).addClass('active');
  });
  if ($('.year__filter').length > 0) {
    var containerEl = document.querySelector('.year__filter');
    var mixer = mixitup(containerEl);
    mixer.filter('.twenty-three');
  }
  let loadMoreBtn = document.querySelector('#load-more-btn');
  let currentItem = 2;
  let array = [...document.querySelectorAll('.messages-rows .row')];
  if (array.length <= 2) {
    loadMoreBtn.style.display = "none"
  }

  loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.messages-rows .row')];

    for (var i = currentItem; i < currentItem + 2; i++) {
      boxes[i].style.display = "flex";
    }

    currentItem += 2;

    if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = "inline-Block"
    }

  }
 
  
})(jQuery);
