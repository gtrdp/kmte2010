//kumpulan fungsi javascript


function satu () {
		$("#info-content").slideUp("slow");
		$("#news-content").slideDown("slow");
	}
function dua () {
	$("#news-content").slideUp("slow");
	$("#info-content").slideDown("slow");
}
function cancelcontact() {
	$("#contactus").fadeOut("medium");
}
function contactus() {
	$("#contactus").fadeIn("medium");
}

$(document).ready(function(){
	$("#nav li").hover(function(){
		$(this).find("ul:first").css({position:"absolute", visibility:"visible", display:"none"}).show("medium");
	},function(){
		$(this).find("ul:first").hide("medium");
	});
	
	$("#slideshow").css({overflow:"hidden"});
	$("#slideshowhead").cycle({
		fx: "fade",
		pause: 1,
		speed: 500
	});
});