$(function(){
	$(".impact-section").hide();
	$(".impact-up").hide();
	$(".impact-hide-show").click(hideShowImpact);
});

function hideShowImpact()
{
	$(".impact").removeClass("expanded");
	
	var id = $(this).attr("href");
	
	var id = id.replace("1", "");

	//if id display is none, we are off.
	var isExpanded = false;
	if($(id).is(":visible") ){
		isExpanded = true;
		$(id).slideToggle(500);
		$(id + "1").slideToggle(500);
	}else{
		$(id).slideToggle(850);	
		$(id + "1").slideToggle(850);
	}

	var myParent = $(this).closest(".impact");
	myParent.addClass("expanded");
	var tempID = id.replace("#", "");
	$("." + tempID + " .section-arrow.down-arrow").toggle();
	$("." + tempID + "1 .section-arrow.down-arrow").toggle();

	//take the id and remove the -expand, and add the d3Chart to the beginning.
	var type = id.replace("-expand", "");
	var idToAnimate = type;
	idToAnimate = type.replace("#", "#d3Chart-");
	
	if (idToAnimate == "#d3Chart-commutes1") {
		animateChartMulti(idToAnimate, commuteData, isExpanded );
	}else if(idToAnimate == "#d3Chart-commutes") {
		animateChartMulti(idToAnimate, commuteData, isExpanded );
	}else if(idToAnimate == "#d3Chart-carbon"){
		animateChart(idToAnimate, carbonData, isExpanded);
	}else if(idToAnimate == "#d3Chart-bonuses"){
		animateChart(idToAnimate, bonusesData, isExpanded);
	}else if(idToAnimate == "#d3Chart-carbon1"){
		animateChart(idToAnimate, carbonData1, isExpanded);
	}else if(idToAnimate == "#d3Chart-bonuses1"){
		animateChart(idToAnimate, bonusesData1, isExpanded);
	}
    
	/* We want the whole impact div that was clicked to be in view
		so if it's bottom > than the browser we need to scroll so bottom is in view */
	$('html,body').animate({
        scrollTop: myParent.offset().top - header_height},
        1000);
	
	return false;
}


