$(function(){
	$(".impact-section").hide();
	$(".impact-up").hide();
	$(".impact-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	$(".impact").removeClass("expanded");
	
	var id= $(this).attr("href");
	$(id).slideToggle(400);
	$(this).parent(".impact").addClass("expanded");
	$(this).find(".arrow").toggle();
	return false;
}