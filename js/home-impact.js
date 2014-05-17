$(function(){
	$(".impact-section").hide();
	$(".impact-up").hide();
	$(".impact-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	$(".impact").removeClass("expanded");
	
	var id = $(this).attr("href");
	
//if id display is none, we are off.
	var isExpanded = false;
	if($(id).is(":visible") ){
		isExpanded = true;
		$(id).slideToggle(500);
	}else{
		$(id).slideToggle(850);	
	}
	
	var myParent = $(this).closest(".impact");
	myParent.addClass("expanded");
	myParent.find(".section-arrow.down-arrow").toggle();

	//take the id and remove the -expand, and add the d3Chart to the beginning.
	var type = id.replace("-expand", "");
	var idToAnimate = type;
	idToAnimate = type.replace("#", "#d3Chart-");
	
	//TODO this could be more elegant, probably by using classes rather than an id
	if(idToAnimate == "#d3Chart-time"){ 
		animateBarChart(idToAnimate, isExpanded);
	}else{
		if(idToAnimate == "#d3Chart-carbon"){
			animateChart(idToAnimate, carbonData, isExpanded);
		}else if(idToAnimate == "#d3Chart-bonuses"){
			animateChart(idToAnimate, bonusesData, isExpanded);
		}
	}
	
	/* We want the whole impact div that was clicked to be in view
		so if it's bottom > than the browser we need to scroll so bottom is in view */
	$('html,body').animate({
        scrollTop: myParent.offset().top},
        1000);
	
	return false;
}


