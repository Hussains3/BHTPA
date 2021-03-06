
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $("header").addClass("fixed-header");
    } else {
      $("header").removeClass("fixed-header");
    
   
    }
  });
});

$("header #modalPoll-1 .form-inline .fa-search").on('click', function(){
    $("header #modalPoll-1 .form-inline").toggleClass("search-active");
});

$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  
    for (var i=0;i<4;i++) {
      next=next.next();
      if (!next.length) {
        next=$(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
    }
  });

  /*
    Carousel
*/
var breakpoint = {
  // Extra Small screen / phone
  xs: 300,
  // Small screen / phone
  sm: 320,
  // Medium screen / tablet
  md: 768,
  // Large screen / desktop
  lg: 992,
  // Extra large screen / wide desktop
  xl: 1200
};
  // slick slider
$('#slick').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    draggable: true,
    infinite: true,
    dots: false,
    arrows: false,
    speed: 1000,
    mobileFirst: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: breakpoint.xs,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: breakpoint.sm,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: breakpoint.md,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: breakpoint.lg,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: breakpoint.xl,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }
    ]
  });

  /*********portfolio section*********** */
$('#myTabJust a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
  });

$('#myTabJust li a[href="#contact-just"]').tab('show') // Select tab by name
//$('#myTabJust li:nth-child(1) a').tab('show') // Select first tab
//$('#myTabJust li:nth-child(2) a').tab('show') // Select last tab
//$('#myTabJust li:nth-child(3) a').tab('show') // Select third tab

$("section.portfolio-section .carrier-tab").on('click', function(){
  $(".portfolio-section").addClass("bg-carrier").removeClass("bg-press bg-tender bg-bhtpa ");
  });

$("section.portfolio-section .press-tab").on('click', function(){
  $(".portfolio-section").addClass("bg-press").removeClass("bg-carrier bg-tender bg-bhtpa ");
});

$("section.portfolio-section .tender-tab").on('click', function(){
$(".portfolio-section").addClass("bg-tender").removeClass("bg-press bg-carrier bg-bhtpa ");
});

$("section.portfolio-section .bhtpa-tab").on('click', function(){
  $(".portfolio-section").addClass("bg-bhtpa").removeClass("bg-press bg-carrier bg-tender");
});


$('.second-setion #slides').slideshow({
	randomize: true,      // Randomize the play order of the slides.
    slideDuration: 3000,  // Duration of each induvidual slide.
    fadeDuration: 2000,    // Duration of the fading transition. Should be shorter than slideDuration.
    animate: true,        // Turn css animations on or off.
    pauseOnTabBlur: true, // Pause the slideshow when the tab is out of focus. This prevents glitches with setTimeout().
    enableLog: false      // Enable log messages to the console. Useful for debugging.
});