$(function(){
	$(".impact-section").hide();
	$(".impact-up").hide();
	$(".impact-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	var id= $(this).attr("href");
	$(id).toggle(1000);
	
	$(this).find(".arrow").toggle();
	return false;
}