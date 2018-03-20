$(document).ready(function(){
   $('#wrapper').fullpage({
		//Navigation
		navigation: true,
    css3:true,
		navigationPosition: 'right',
    anchors: ['Inicio', 'About', 'Contact'],
		showActiveTooltip: false,
    verticalCentered: false,
    menu: '#Opciones',
    fixedElements: '#navbar',
	}); 
  $("#about1").click(function() {
    $("#about1").addClass('active');
    $(".a1").removeClass('hide');
    $("#skills").removeClass('active');
    $(".s1").addClass('hide');
  });
    $("#skills").click(function() {
    $("#skills").addClass('active');
    $(".s1").removeClass('hide');
    $("#about1").removeClass('active');
    $(".a1").addClass('hide');
  });
    
  });
