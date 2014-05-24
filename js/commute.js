var showingWeek = "#may5";

$(function(){
	$(".week-section").hide();
	$(".week-up").hide();
	$(".header-divider").hide();
	$(".week-hide-show").click(hideShowWeekLink);
	hideShowWeek("#jun2");
	
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
	showingWeek = id;
	var myParent = $(id).closest(".week");
	
	var isVisible = !$(id).is(":visible");
	if($(id).is(":visible")) //switch to hide
	{ 
		$(id).slideUp(1000, "easeOutQuart", function(){
			myParent.find(".section-arrow.down-arrow").toggle();
		});
	}
	else	//switch to show
	{
		$(id).slideDown(400, "swing", function(){
			myParent.find(".section-arrow.down-arrow").toggle();
		});
	}
	
	myParent.toggleClass("expanded");
	myParent.find(".header-divider").toggle();
	
	if(isVisible){
		$('html,body').animate({
			scrollTop: myParent.offset().top - header_height},
			1000);
	}
}