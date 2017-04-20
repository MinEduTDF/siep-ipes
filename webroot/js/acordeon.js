function acordeon(id) {
	$("#acordeon_"+id).css( "display", "none" );
	var display = "none";
$("#click_"+id).click(function(event){
	if (display == "none") {
		display = "inline"
	} else {
		display = "none"
	}

$("#acordeon_"+id).css( "display", display );

	});
}

$(document).ready(function(){
	acordeon('01');
	acordeon('02');
	acordeon('03');
	acordeon('04');
	acordeon('05');
	acordeon('06');
	acordeon('07');
	acordeon('08');
	acordeon('09');
	acordeon('10');
	acordeon('11');
	acordeon('12');
});


