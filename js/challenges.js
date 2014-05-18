$(function() {
	$(".team-toggle .unselected").hide();	
	$(".team-toggle").click(switchTeamView);

	$(".team-members-section").hide();
	$(".team-hide-show").click(challengesHideShowImpact);
});

function switchTeamView()
{
	$(".team-toggle img").toggle();
	$("#challenges .content").removeClass("currentContent");

	$($(this).attr("href")).addClass("currentContent");
	return false;	
}

function challengesHideShowImpact()
{
	var id = $(this).attr("href");

	//if id display is none, we are off.
	var isExpanded = false;
	if($(id).is(":visible") ){
		isExpanded = true;
		$(id).slideToggle(500);
	}else{
		$(id).slideToggle(850);

		var myParent = $(this).closest(".leader");	
		$('html,body').animate({
        scrollTop: myParent.offset().top - header_height},
     	850);
	}
	return false;
}