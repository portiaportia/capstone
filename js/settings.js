jQuery(function($) {
 // $('#track-check').onoff();
  
  $("#track-check").change(trackChanged);
  $("#auto-off-desc").hide();

  $("#tracking-detail, .less").hide();

  $("#privacy-addition, #tracking-detail, .up-arrow-privacy, .up-arrow-tracking").hide();
  $("#privacy-toggle").click(togglePrivacy);
  $("#tracking-toggle").click(toggleTrackingDetail);
  
  $(".day-toggle").click(toggleDay);
});

function trackChanged()
{	
    $("#auto-on-desc").toggle();	
    $("#auto-off-desc").toggle();	
    
    var isEnabled = $("#commute-week").attr("class");
    //if id display is none, we are off.
    if(isEnabled == "enabled" ){
      $("#settings").find("#commute-week").removeClass("enabled");
      $("#settings").find("#commute-week").addClass("disabled");  
    }else{
      $("#settings").find("#commute-week").removeClass("disabled");
      $("#settings").find("#commute-week").addClass("enabled");  

    }
}

function togglePrivacy()
{
	var id = $(this).attr("href");
	$(id).slideToggle(500);	
  	
	$(".up-arrow-privacy, .down-arrow-privacy").toggle();
	return false;
}

function toggleTrackingDetail()
{
  var id = $(this).attr("href");
  $(id).slideToggle(500); 
  
  $(".up-arrow-tracking, .down-arrow-tracking").toggle();
  return false;
}

function toggleDay()
{
  var href = $(this).attr("href");

  $(href.concat(" .selected")).toggle();
  $(href.concat(" .unselected")).toggle();
  
  return false;
}

