var currentPage = 0;
var firstClickCommute = true;
var header_height = 45;

window.onload = function() {
	//make the page fill the height
	var pageExtra = $(".pages").outerHeight(true) - $(".pages").innerHeight() + $(".pages").pixels('paddingTop') + $(".pages").pixels('paddingBottom');

	$(".pages").height($(window).height() - pageExtra);

	//on larger devices make the width 655 of the height
	if (window.matchMedia("(min-width:37.5em)").matches) {
		$(".pages, .page, .bottom-nav, .top-nav").width($(".pages").height() * .65);
	}

	//adjust the page with for bug in ff
	$(".page, .page-title").width($(".pages").width() - $(".page").pixels("paddingRight")*2);

	$(".pages").swipe({swipeLeft:swiped, swipeRight:swiped});

	$(".bottom-nav a, .left-arrow a, .right-arrow a").click(changePage); //control bottom navitation
	
	$(".top-nav a, .arrow-title a").click(changeContentHome); //control top navigation

	$(".page-title").click(resetTop);
}
//get the size of a px property without the px

function resetTop()
{
	$('html,body').animate({
        scrollTop: 0},
        0);
		
	return false;
}


$.fn.pixels = function(property) {

	return parseInt(this.css(property).slice(0, -2));

};


function swiped(event, direction, distance, duration, fingerCount) {
	switch(direction) {

		case "left":
			if($(".home-view").is(":visible")) nextView(".home-view");
			break;
		case "right":
			if($(".home-view").is(":visible")) prevView(".home-view");
			break;
	}

}

function nextView(classSet) {
	//if we get to the last page, get out of this function
	if (currentPage >= $(classSet).length - 1)currentPage = -1;

	currentPage++;

	$(classSet).removeClass("current"); //make no pages show

	$(classSet).eq(currentPage).addClass("current");
	//highlightNav("#" + $(classSet).eq(currentPage).attr("id"));
}

function prevView(classSet) {
	//if we get to the last page, get out of this function
	if (currentPage <= 0) currentPage = $(classSet).length;

	currentPage--;

	$(classSet).removeClass("current"); //make no slides show
	$(classSet).eq(currentPage).addClass("current");
	//highlightNav("#" + $(classSet).eq(currentPage).attr("id"));
}


function changePage() {
	$(".page").removeClass("current");//make no page show
	
	var link = $(this).attr("href");
	$(link).addClass("current");
	highlightNav($(this).attr("href"));
	if(link.indexOf("summary") > -1) highlightNav("#summary");
	
	//slide today in when we go to commute tab
	if($(this).attr("href") == "#commute")
	{	
		var myParent = $(showingWeek).closest(".week");
		$('html,body').animate({
        scrollTop: myParent.offset().top - header_height},
        1000);
	}
	else //scroll to top
	{
		$('html,body').animate({
        scrollTop: 0},
        0);
	}
	return false;
}

function changeContentHome() {
	$("#home .content").removeClass("currentContent");
	$($(this).attr("href")).addClass("currentContent");
	$(".top-nav").find("img").attr("src", "images/circle.png");
	var imageId = $(this).data("view");
	$("#" + imageId).find("img").attr("src", "images/circle-selected.png");
	
	return false;
}

function highlightNav(pageId) {

	$(".bottom-nav a").removeClass("highlight");

	$.each($(".bottom-nav a"), function() {
		$(this).children("img").hide();
		var aHref = $(this).attr("href");

		if (aHref == pageId) {
			$(this).addClass("highlight");
			$(this).children(".selected").show();
		}else{
			$(this).children(".unselected").show();
		}

	});

}

/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */


window.matchMedia = window.matchMedia || (function(doc, undefined) {


	var bool, docElem = doc.documentElement, refNode = docElem.firstElementChild || docElem.firstChild,


	// fakeBody required for <FF4 when executed in <head>


	fakeBody = doc.createElement('body'), div = doc.createElement('div');


	div.id = 'mq-test-1';


	div.style.cssText = "position:absolute;top:-100em";


	fakeBody.style.background = "none!important";


	fakeBody.appendChild(div);


	return function(q) {


		div.innerHTML = '&shy;<style media="' + q + '"> #mq-test-1 { width: 42px; }</style>';


		docElem.insertBefore(fakeBody, refNode);


		bool = div.offsetWidth == 42;


		docElem.removeChild(fakeBody);


		return {
			matches : bool,
			media : q
		};


	};


})(document); 