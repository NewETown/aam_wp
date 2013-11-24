jQuery(document).ready(function($) {

	init_scroll();

	var topDelta = $(window).scrollTop();

	$(window).scroll(function(){

		topDelta = $(window).scrollTop();

		// console.log(topDelta);
	
		$("#hero-box").css({
	  		top: function(index, value) {
	    		return 420 - (topDelta * .8);
	  		}
	  	});

	  	$("#hero-greeting").css({
	  		opacity: function(index, value) {
	  			return 1 - (topDelta * .003); 
	  		}
	  	});

	  	if (topDelta > 300 && topDelta < 1530) {
	  		$("#hero-box1").css({
		  		top: function(index, value) {
		    		return 960 + (topDelta * .4);
		  		},
		  		opacity: function(index, value) {
		  			return 0 + (topDelta * .00085); 
		  		}
		  	});
	  	}

	  	if (topDelta > 1400) {
	  		$("#hero-box2").css({
		  		top: function(index, value) {
		    		return 1650 + (topDelta * .36);
		  		},
		  		opacity: function(index, value) {
		  			return 0 + (topDelta * .00045); 
		  		}
		  	});
	  	}

	});

});

var nav_is_expanded = true;

function init_scroll() {
	jQuery(window).scroll(function () {
	    if (jQuery(window).scrollTop() == 0 && !nav_is_expanded)
			expand_navbar();
	    else if (nav_is_expanded)
	    	shrink_navbar();
	});
}
function expand_navbar() {

	jQuery("#navbar").stop().animate({height:70}, 250, function() { jQuery(this).css("overflow", "visible"); });
	
	jQuery("#navbar-brand").stop().animate({marginTop:0}, 250);

	jQuery("#nav-buttons").children("li").animate({marginTop:0}, 250);

	nav_is_expanded = true;

}
function shrink_navbar() {

	jQuery("#navbar").stop().animate({height:50}, 250, function() { jQuery(this).css("overflow", "visible"); });
	
	jQuery("#navbar-brand").stop().animate({marginTop:-15}, 250);

	jQuery("#nav-buttons").children("li").animate({marginTop:-20}, 250);

	nav_is_expanded = false;

}