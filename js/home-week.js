var showingWeek = "#may5";

$(function(){
	$(".week-section").hide();
	$(".week-up").hide();
	$(".week-hide-show").click(hideShowWeekLink);
	hideShowWeek("#may5");
	
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
	showingWeek = id;
	var myParent = $(id).closest(".week");
	myParent.addClass("expanded");
	myParent.find(".section-arrow.down-arrow").toggle();
	
	$('html,body').animate({
        scrollTop: myParent.offset().top - header_height},
        1000);
}