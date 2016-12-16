jQuery(function ($) {

    'use strict';

    // ----------------------------------------------
    // Table index
    // ----------------------------------------------

    /*-----------------------------------------------
    # Dropdown Menu Animation
    # Navigation Fixed
    # Search
	# Parallax Scrolling
    # Slider Height
    # Active mixitup
    # smoothScroll
    # Pretty Photo
    # Single Portfolio
    # Close Single Portfolio
    # Timer
    # Google Map Customization
    -------------------------------------------------*/
	
	 // ----------------------------------------------
    // # Dropdown Menu Animation 
    // ----------------------------------------------
	
	(function () {
		$('.dropdown').on('show.bs.dropdown', function(e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
		});

		$('.dropdown').on('hide.bs.dropdown', function(e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
		});

	}());

	// ----------------------------------------------
    // # Navigation fixed  
    // ----------------------------------------------	
	
	(function () {
		$(window).on('scroll', function(){
			if( $(window).scrollTop()>650 ){
				$('#index2 #navigation .navbar-static-top').addClass('navbar-fixed-top');
			} else {
				$('#index2 #navigation .navbar-static-top').removeClass('navbar-fixed-top');
			};
			if( $(window).scrollTop()>0 ){
				$('#onepage #navigation .navbar-static-top').addClass('navbar-fixed-top');
			} else {
				$('#onepage #navigation .navbar-static-top').removeClass('navbar-fixed-top');
			};
			if( $(window).scrollTop()>0 ){
				$('#landing #navigation .navbar-static-top').addClass('navbar-fixed-top');
			} else {
				$('#landing #navigation .navbar-static-top').removeClass('navbar-fixed-top');
			}
		});
	}());
	
		
	
	// ----------------------------------------------
    // # Search
    // ----------------------------------------------

    (function () {

        $('.fa-search').on('click', function() {
            $('.search').fadeIn(500, function() {
              $(this).toggleClass('search-toggle');
            });     
        });

        $('.search-close').on('click', function() {
            $('.search').fadeOut(500, function() {
                $(this).removeClass('search-toggle');
            }); 
        });

    }());
	
	// ----------------------------------------------
    // # Parallax Scrolling
    // ----------------------------------------------
    
    (function () {
		
        function parallaxInit() {       
           $("#promotion").parallax("50%", 0.3);
			$("#twitter").parallax("50%", 0.3);
			$("#promotion-two").parallax("50%", 0.3);
			$("#about-video").parallax("50%", 0.3);
			$("#onepage #fun-fact").parallax("50%", 0.3);
			$("#onepage #shop").parallax("50%", 0.3);
			$("#landing #video-promotion").parallax("50%", 0.3);
			$("#landing #feature-in").parallax("50%", 0.3);
        }   
        parallaxInit();

    }());
	
	
		
	 // ----------------------------------------------
    // # Pretty Photo
    // ----------------------------------------------

    (function () {

        $("a[data-gallery^='prettyPhoto']").prettyPhoto({
        	social_tools: false
        });

    }());
	
	
	// ----------------------------------------------
    // # Team filter
    // ----------------------------------------------
	
	(function () {
		
       var $portfolio_selectors = $('.member-filter >ul>li>a');
		var $portfolio = $('.all-members');
		$portfolio.isotope({
			itemSelector : '.member',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});

    }());
	
	// ----------------------------------------------
    // # Portfolio filter
    // ----------------------------------------------
	
	(function () {
		
      var $portfolio_selectors = $('.project-filter >ul>li>a');
		var $portfolio = $('.all-products');
		$portfolio.isotope({
			itemSelector : '.filterable-product',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});

    }());
	
	
	// ----------------------------------------------
    // # Fun Fact Timer
    // ----------------------------------------------
	(function () {
		$('#fun-fact').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
			if (visible) {
				$(this).find('.timer').each(function () {
					var $this = $(this);
					$({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter));
						}
					});
				});
				$(this).unbind('inview');
			}
		});
	
	}());
	
	// ----------------------------------------------
    // # SmoothScroll
    // ----------------------------------------------

    (function () {

        smoothScroll.init();

    }());
	
	// ----------------------------------------------
    // # Clients Carousel Timing
    // ----------------------------------------------
	(function () {
	
		$('#client-carousel').carousel({
		  interval: 4000
		})
    }());	
	
    // ----------------------------------------------
    // # Google Map Customization
    // ----------------------------------------------
	
	(function(){

		var map;

		map = new GMaps({
			el: '#gmap',
			lat: 32.3305419,
			lng: 34.8743185,
			scrollwheel:false,
			zoom: 13,
			zoomControl : true,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		
		var styles = [ 

		{
			"featureType": "road",
			"stylers": [
			{ "color": "#A5A5A5" }
			]
		},{
			"featureType": "water",
			"stylers": [
			{ "color": "#C9C9C9" }
			]
		},{
			"featureType": "landscape",
			"stylers": [
			{ "color": "#E9E7E3" }
			]
		},{
			"elementType": "labels.text.fill",
			"stylers": [
			{ "color": "#d3cfcf" }
			]
		},{
			"featureType": "poi",
			"stylers": [
			{ "color": "#CCCCCC" }
			]
		},{
			"elementType": "labels.text",
			"stylers": [
			{ "saturation": 1 },
			{ "weight": 0.1 },
			{ "color": "#000000" }
			]
		}

		];

		map.addStyle({
			styledMapName:"Styled Map",
			styles: styles,
			mapTypeId: "map_style"  
		});

		map.setStyle("map_style");
	}());		
		
});


