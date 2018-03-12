$(document).ready(function(){
  	$(window).scroll(function(){
    var barra= $(window).scrollTop();
    var posicion = barra * 0.5;
    $('.parallax').css({
        'background-position': '0 -' + posicion + 'px'
    })
  	})
    $(window).scroll(function(){
    if ($(window).scrollTop()) {
    	$('nav').addClass('black');
    }else{
    	$('nav').removeClass('black')
    }
  })
   $('#fullpage').fullpage({
		//Navigation
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['Inicio', 'About', 'Method','Contact'],
		showActiveTooltip: true,
		slidesNavigation: false,
		slidesNavPosition: 'bottom',
    verticalCentered:false
	}); 
});
