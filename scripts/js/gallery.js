$(document).ready(function(){
	$("#slide ul").css({overflow:"hidden"});
	$("#mainslide").css({overflow:"hidden"});
	
	$("#one").cycle({
		fx:			"scrollRight",
		speed:		"medium",
		timeout:	0,
		prev:		".mask-left",
		next:		".mask-right",
	});
	$("#two").cycle({
		fx:			"scrollRight",
		speed:		"medium",
		timeout:	0,
		prev:		".mask-left",
		next:		".mask-right",
	});
	$("#three").cycle({
		fx:			"scrollRight",
		speed:		"medium",
		timeout:	0,
		prev:		".mask-left",
		next:		".mask-right",
	});
	
	$("#mainslide").cycle({
		fx:			"fade",
		speed:		"medium",
		timeout:	0,
		prev:		".mask-left",
		next:		".mask-right",
	});
});