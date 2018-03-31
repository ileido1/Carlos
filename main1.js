$(document).ready(function(){
   $('#wrapper').fullpage({
		//Navigation
		navigation: true,
    css3:true,
		navigationPosition: 'right',
    anchors: ['Inicio', 'About', 'Contact'],
     scrollOverflow: true,
		showActiveTooltip: false,
    verticalCentered: false,
    autoScrolling: true,
    menu: '#Opciones',
    fixedElements: '#navbar',
    onLeave: function(index, nextIndex, direction){
    var leavingSection = $(this);

    //después de abandonar la sección 1
    if(index == 1 && direction =='down'){
       $('nav').addClass('black');
    }
//devolviendome a la 1
    else if(index == 2 && direction == 'up'){
      $('nav').removeClass('black');
    }
  }
	}); 
  });
