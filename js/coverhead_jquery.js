$(document).ready(function(){

	
	$("nav.navbar > div.navbar-brand").click(function(){

  	var canvas = $("#micanvas");

       	
  	canvas.animate({height: "toggle" , opacity: '0.3'}, "low");
  	/*
  	canvas.animate({height: '400em', opacity: '0.5'}, "fast");
  	canvas.animate({width: '700em', opacity: '0.8'}, "fast");
*/
	});
    /*
  	$("#navbar-cover").mouseleave(function(){
  		var navbar = $("#navbar-cover");

  		navbar.css("background-color", "rgba(119, 136, 153, 0.5)";

	
  	});
  	*/

});
