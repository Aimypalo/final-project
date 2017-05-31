$(document).ready(function(){
	console.log('it works');

	var $menu = $('.menu');

	//When click on the .nav-icon slide the .menu down
	//When click on the .nav-icon again slide the .menu up

	$('.nav-icon').on('click', function(){
		$('.menu').slideToggle(300);
	});	


	$('.scroll-icon').on('click', function(){
	    $('html, body').animate({
        scrollTop: $('.text-1').offset().top
    }, 1000); 
	    $('.menu').slideDown(300);
	});


	$('.home').on('click', function(){
	    $('html, body').animate({
        scrollTop: $('.site-container').offset().top
    }, 1000);
	    $('.menu').slideUp(1000);
	});


	$('.nav-links').on('click', function(){
	    $('html, body').animate({
        scrollTop: $('.links').offset().top-75.15
    }, 1000); 
	});


	$('.nav-services').on('click', function(){
	    $('html, body').animate({
        scrollTop: $('.services').offset().top-75.15
    }, 1000); 
	});


	$( '.photo-gallery, .map-services, .web-development, .online-shop, .art, .about, .contact' ).draggable({
  		containment: ".links"
	});






	// var $window = $(window);
	// var menuDistance = $menu.offset().top;

	// $window.on('scroll', function() {
 //    	var scrollPosition = $window.scrollTop();
 //    	if ( scrollPosition > menuDistance) {
 //      		$menu.addClass('pinned');
 //    	} else {
 //       		$menu.removeClass('pinned');
 //       	}
 //    })

});
