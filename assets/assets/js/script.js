$(document).ready(function() {
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $("header").addClass("fixed-header");
      } else {
        $("header").removeClass("fixed-header");
      
     
      }
    });
  });
  
  //Floating menu
  $(".floating-corner .icon i").on('click', function(){
    $(".floating-corner .content").toggleClass("content-disable");
  });
  
  
  
  $('.corner-icon').on('click',function(){
		$(this).find('i').toggleClass('fa-angle-left fa-angle-right');
  });	
  
  
  
  //Hamburger menu search icon
  $("header #modalPoll-1 .form-inline .fa-search").on('click', function(){
      $("header #modalPoll-1 .form-inline").toggleClass("search-active");
  });
  
  $('.digitalbd #slides').slideshow({
    randomize: true,      // Randomize the play order of the slides.
      slideDuration: 3000,  // Duration of each induvidual slide.
      fadeDuration: 2000,    // Duration of the fading transition. Should be shorter than slideDuration.
      animate: true,        // Turn css animations on or off.
      pauseOnTabBlur: true, // Pause the slideshow when the tab is out of focus. This prevents glitches with setTimeout().
      enableLog: false      // Enable log messages to the console. Useful for debugging.
  });

  /*****Modal Vedio background off****** */
$(document).ready(function() {

  // Gets the video src from the data-src on each button
  var $videoSrc;  
  $('.play-btn').click(function() {
      $videoSrc = $(this).data( "src" );
  });
  console.log($videoSrc);  
    
  // when the modal is opened autoplay it  
  $('#modalYT').on('shown.bs.modal', function (e) {
      
  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
  $("#player").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
  })
  
  // stop playing the youtube video when I close the modal
  $('#modalYT').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#player").attr('src',$videoSrc); 
  }) 
    
  // document ready  
  });