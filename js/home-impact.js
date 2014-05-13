$(function(){
	$(".impact-section").hide();
	$(".impact-up").hide();
	$(".impact-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	$(".impact").removeClass("expanded");
	
	var id = $(this).attr("href");
	$(id).slideToggle(1000);
	var myParent = $(this).closest(".impact");
	myParent.addClass("expanded");
	myParent.find(".section-arrow.down-arrow").toggle();

	//take the id and remove the -expand, and add the d3Chart to the beginning.
	var idToAnimate = id.replace("-expand", "").replace("#", "#d3Chart-");

	//TODO this could be more elegant, probably by using classes rather than an id
	if(idToAnimate == "#d3Chart-time"){ 
		animateBarChart(idToAnimate);
	}else{
		animateChart(idToAnimate);
	}
	
	/* We want the whole impact div that was clicked to be in view
		so if it's bottom > than the browser we need to scroll so bottom is in view */
	$('html,body').animate({
        scrollTop: myParent.offset().top},
        1000);
	
	return false;
}


