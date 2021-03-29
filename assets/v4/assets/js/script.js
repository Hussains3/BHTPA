
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

  /*========map==========*/
  
  var cities = L.layerGroup();

	L.marker([23.15, 89.22]).bindPopup("<img class='img-fluid rounded' src='/assets/img/shsp.jpg'><h6>Sekh Hasina Software Technology Park!</h6><a href='#'>visit here</a>").addTo(cities),
	L.marker([24.37, 88.55]).bindPopup("<img class='img-fluid rounded' src='/assets/img/rhtp.jpg'><h6>Bangabandhu Sheikh Mujib Hi-Tech Park, Rajshahi</h6><a href='#'>visit here</a>").addTo(cities),
	L.marker([25.05, 91.79]).bindPopup("<img class='img-fluid rounded' src='/assets/img/sylhet-park.jpg'><h6>Bangabandhu Sheikh Mujib Hi-Tech Park, Sylhet</h6><a href='#'>visit here</a>").addTo(cities),
	L.marker([23.75, 90.39]).bindPopup("<img class='img-fluid rounded' src='/assets/img/janata-tower.jpg'><h6 class=''>Janata Tower Hi-Tech Park, Dhaka</h6><a href='#'>visit here</a>").addTo(cities);
	
    //L.marker([24.06, 90.22]).bindPopup("<img class='img-fluid rounded' src='/assets/img/kaliakair-park.jpg'><h6>Kaliakair Hi-Tech Park, Gazipur</h6><a href='#'>visit here</a>").addTo(cities);
    

	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

	var map = L.map('mapid2', {
		center: [23.75, 90.39],
		zoom: 8,
		layers: [grayscale, cities]
	});

	var baseLayers = {
		"Grayscale": grayscale,
		"Streets": streets
	};

	var overlays = {
		"Cities": cities
	};
	
	var greenIcon = L.icon({
        iconUrl: '/assets/img/kaliakair-park.jpg',
        iconSize:     [75, 55], // size of the icon
        iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    
    L.marker([24.06, 90.22], {icon: greenIcon}).addTo(map).bindPopup("<img class='img-fluid rounded' src='/assets/img/kaliakair-park.jpg'><h6>Kaliakair Hi-Tech Park, Gazipur</h6><a href='#'>visit here</a>");
    
    
	

	L.control.layers(baseLayers, overlays).addTo(map);


/*============== IMAGE POPUP ============*/
$(document).ready(function() {
  $('.gallery-col img').each(function() {
      var currentImage = $(this);
      currentImage.wrap("<a class='image-link' href='" + currentImage.attr("src") + "'</a>");
  });
  $('.image-link').magnificPopup({type:'image'});  
});
  