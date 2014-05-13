$(function() {
	$(".team-toggle .unselected").hide();	
	$(".team-toggle").click(switchTeamView);
});

function switchTeamView()
{
	$(".team-toggle img").toggle();	
}