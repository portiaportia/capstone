var currentPage = 0;

window.onload = function()
{
	//make the page fill the height
	var pageExtra = $(".pages").outerHeight(true) - $(".pages").innerHeight() + $(".pages").pixels('paddingTop') + $(".pages").pixels('paddingBottom');
	$(".pages").height($(window).height() - pageExtra);
	
	//on larger devices make the width 655 of the height
	if(window.matchMedia("(min-width:37.5em)").matches)
	{
		$(".pages, .page, .bottom-nav, .top-nav").width($(".pages").height() * .65);
	}
	
	//swipe to other pages
	$(".pages").swipe({swipe:swiped});

	$(".bottom-nav a").click(changePage);	//control bottom navitation
	$(".top-nav a").click(changeContent);	//control top navigation	
	highlightNav("#home");					//highlight home on bottom nav
}

//get the size of a px property without the px
$.fn.pixels = function(property) {
    return parseInt(this.css(property).slice(0,-2));
};

function swiped(event, direction, distance, duration, fingerCount)
{
	switch(direction)
	{
		case "left":
			nextPage();
			break;
		case "right":
			prevPage();
			break;
	}
}

function nextPage()
{
	//if we get to the last page, get out of this function
	if(currentPage >= $(".page").length - 1)currentPage = -1;
	
	currentPage++;
	$(".page").removeClass("current");	//make no pages show
	$(".page").eq(currentPage).addClass("current");
	highlightNav("#" + $(".page").eq(currentPage).attr("id"));
	
}

function prevPage()
{
	//if we get to the last page, get out of this function
	if(currentPage <= 0)currentPage = $(".page").length;
	
	currentPage--;
	$(".page").removeClass("current");	//make no slides show
	$(".page").eq(currentPage).addClass("current");
	highlightNav("#" + $(".page").eq(currentPage).attr("id"));
}

function changePage()
{
	$(".page").removeClass("current");	//make no page show
	$($(this).attr("href")).addClass("current");
	highlightNav($(this).attr("href"));
	return false;
}

function changeContent()
{
	$(".content").removeClass("currentContent");
	$($(this).attr("href")).addClass("currentContent");
	$(".top-nav").find("img").attr("src", "images/circle.png");
	$(this).find("img").attr("src", "images/circle-selected.png");
	return false;
}

function highlightNav(pageId)
{
	$(".bottom-nav a").removeClass("highlight");
	
	$.each($(".bottom-nav a"), function() {
	
		var aHref = $(this).attr("href");	
		if(aHref == pageId)
		{	
			$(this).addClass("highlight");
		}
	});
}

/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
window.matchMedia = window.matchMedia || (function(doc, undefined){
  
  var bool,
      docElem  = doc.documentElement,
      refNode  = docElem.firstElementChild || docElem.firstChild,
      // fakeBody required for <FF4 when executed in <head>
      fakeBody = doc.createElement('body'),
      div      = doc.createElement('div');
  
  div.id = 'mq-test-1';
  div.style.cssText = "position:absolute;top:-100em";
  fakeBody.style.background = "none!important";
  fakeBody.appendChild(div);
  
  return function(q){
    div.innerHTML = '&shy;<style media="'+q+'"> #mq-test-1 { width: 42px; }</style>';
    
    docElem.insertBefore(fakeBody, refNode);
    bool = div.offsetWidth == 42;
    docElem.removeChild(fakeBody);
    
    return { matches: bool, media: q };
  };
  
})(document);