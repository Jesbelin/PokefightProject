$(document).ready(function() {
	$("cadre-menu").animate({
		marginLeft: "170px"
	}, 400);
},
function(){
	$("cadre-menu").animate({
		marginLeft: "0"
	}, 300);
});
$("cadre-menu").hover(function(){}, function(){
	$("cadre-menu").animate({
		marginLeft: "0"
	}, 300);
});