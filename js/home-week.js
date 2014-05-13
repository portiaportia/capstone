$(function(){
	$(".week-section").hide();
	$(".week-up").hide();
	$(".week-hide-show").click(hideShowWeekLink);
	
	
});

function hideShowWeekLink()
{
	$(".week").removeClass("expanded");
	
	var id= $(this).attr("href");
	hideShowWeek(id);
	return false;
}

function hideShowWeek(id)
{	
	$(id).slideToggle(400);
	
	var myParent = $(id).closest(".week");
	myParent.addClass("expanded");
	myParent.find(".section-arrow.down-arrow").toggle();
	
	$('html,body').animate({
        scrollTop: myParent.offset().top},
        1000);
}