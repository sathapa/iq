/*$(function() {
    var h = window.location.protocol + "//" + window.location.host + "/";
    $("#manuf_wh .mnuf_lbl").append('<img src="'+h+'qw_tr/assets/images/mouse-wheel-scroll.png" alt="Scroll up or down with mousewheel" />');

});
*/




// WITH Plugin
$(function() {
    $("#how-many-2").bind("mousewheel", function(event, delta) {
        if (delta > 0) {
            this.value = parseInt(this.value) + 1;
        } else {
            if (parseInt(this.value) > 0) {
                this.value = 0;
            }
        }
        return false;
     });
});




// WITHOUT Plugin
var EventUtil = {

    addHandler: function(element, type, handler){
        if (element.addEventListener){
            element.addEventListener(type, handler, false);
        } else if (element.attachEvent){
            element.attachEvent("on" + type, handler);
        } else {
            element["on" + type] = handler;
        }
    },
	
	removeHandler: function(element, type, handler){
        if (element.removeEventListener){
            element.removeEventListener(type, handler, false);
        } else if (element.detachEvent){
            element.detachEvent("on" + type, handler);
        } else {
            element["on" + type] = null;
        }
    },
	
	getEvent: function(event) {
        return event ? event : window.event;
    },
	
	getTarget: function(event) {
		return event.target || event.srcElement;    
	},
	
	getWheelDelta: function(event) {
        if (event.wheelDelta){
            return event.wheelDelta;
        } else {
            return -event.detail * 40;
        }
    },
	
	preventDefault: function(event) {
        if (event.preventDefault){
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    }
    
};

function onWheel(event) {

	event = EventUtil.getEvent(event);
	var curElem = EventUtil.getTarget(event);
	var curVal = parseInt(curElem.value);
	var delta = EventUtil.getWheelDelta(event);
	
	if (delta > 0) {
		curElem.value = curVal + 1;
	} else{ 
		curElem.value = 0;
	}
	
	EventUtil.preventDefault(event);
	
}

$(function() {

	$(".wheelable").hover(function(){
		EventUtil.addHandler(document,'mousewheel',onWheel);
		EventUtil.addHandler(document,'DOMMouseScroll',onWheel);
	},
	function(){
		EventUtil.removeHandler(document,'mousewheel',onWheel);
		EventUtil.removeHandler(document,'DOMMouseScroll',onWheel);
	});
	
});