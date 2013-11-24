//DivPeek - Custom jQuery CSS3 Animation Trigger Script by David Halford
//(see https://github.com/davidhalford/DivPeek)
//===============================================================================
//CONFIG: 
var elementsToTrack = ["#autobots", "#rain"];

var pixelOffset = -24;
var inClassName = "inViewPort";
var outClassName = "outViewPort";
//===============================================================================

//add function to see of elements exist (otherwise removing an elemnet from DOM but not from array breaks everything)
jQuery.fn.exists = function(){return this.length>0;}

//define vars out of scope
var viewPortHeight = jQuery(window).height();
var scrollFromTop = jQuery(window).scrollTop();
var scrollFromBottom = (parseInt(scrollFromTop)+parseInt(viewPortHeight));

//function for recalculating all positioning vars in scroll/resize
function recalcVars(){
	viewPortHeight = jQuery(window).height();
	scrollFromTop = jQuery(window).scrollTop();
	scrollFromBottom = (parseInt(scrollFromTop)+parseInt(viewPortHeight));
	for (var i = 0; i < elementsToTrack.length; i++) {
		if (jQuery(elementsToTrack[i]).exists()) {
			checkInViewport(scrollFromBottom, elementsToTrack[i]);
		}
   	}
}

//catch window events
jQuery(window).resize(function(e){recalcVars();});
document.addEventListener("touchmove", ScrollStart, false);
document.addEventListener("scroll", Scroll, false);
function ScrollStart(){recalcVars();}
function Scroll(){recalcVars();}

//function that handles if an element is in the viewport or not 
function checkInViewport(scrollBottom, domElement){
	var elementPos = jQuery(domElement).offset().top;
	if((parseInt(scrollBottom)+parseInt(pixelOffset)) > elementPos){
		jQuery(domElement).addClass(inClassName).removeClass(outClassName);
	} else {
		jQuery(domElement).removeClass(inClassName).addClass(outClassName);
	}
}