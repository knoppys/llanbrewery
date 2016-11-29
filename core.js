/********************
// Slick Slider
********************/ 
jQuery(document).ready(function(){
  jQuery('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    autoPlay: true,
    pauseOnHover: false,
    prevArrow: '<div class="col-xs-6 left-arrow"><span class="fa fa-chevron-left" aria-hidden="true"></span></div>',
    nextArrow: '<div class="col-xs-6 right-arrow"><span class="fa fa-chevron-right" aria-hidden="true"></span></div>',
    cssEase: 'linear',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
    ]
  });
  
});
/********************
// Loads images, correctly sets the view (ImagesLoaded)

jQuery(document).ready(function(){
jQuery('#container').imagesLoaded().always( function( instance ) {
  console.log('ALWAYS - all images have been loaded');
});
});
********************/ 
/********************
// Toggle the Social Header
********************/ 
jQuery(document).ready(function(){
	jQuery('.navbar-toggle').on('click', function(){
		jQuery('.social').fadeToggle('fast');
	});
});

jQuery(document).ready(function(){
	jQuery('#welcome-gone').on('click', function(){
		jQuery('.homebody').fadeIn(1000);
    jQuery('.homefooter').fadeIn(1000);
		jQuery('#welcome').fadeOut();
	});
});