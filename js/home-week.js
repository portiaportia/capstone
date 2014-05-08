$(function(){
	$(".week-section").hide();
	$(".week-up").hide();
	$(".week-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	var id= $(this).attr("href");
	$(id).slideToggle(500);
	
	$(this).find(".arrow").toggle();
	return false;
}