$(function(){
	$(".week-section").hide();
	$(".week-up").hide();
	$(".week-hide-show").click(hideShowWeek);
});

function hideShowWeek()
{
	$(".week").removeClass("expanded");
	
	var id= $(this).attr("href");
	$(id).slideToggle(500);
	$(this).parent(".week").addClass("expanded");
	
	$(this).find(".arrow").toggle();
	return false;
}