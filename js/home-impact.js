$(function(){
	$(".impact-section").hide();
	$(".impact-up").hide();
	$(".impact-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	$(".impact").removeClass("expanded");
	
	var id = $(this).attr("href");
	$(id).slideToggle(400);
	$(this).parent(".impact").addClass("expanded");
	$(this).find(".arrow").toggle();

	//take the id and remove the -expand, and add the d3Chart to the beginning.
	var idToAnimate = id.replace("-expand", "").replace("#", "#d3Chart-");

	//TODO this could be more elegant, probably by using classes rather than an id
	if(idToAnimate == "#d3Chart-time"){ 
		animateBarChart(idToAnimate);
	}else{
		animateChart(idToAnimate);
	}
	
	return false;
}


