jQuery(function($) {
 // $('#track-check').onoff();
  
  $("#track-check").change(trackChanged);
  $("#auto-off-desc").hide();

  $("#tracking-detail, .less").hide();
  $("#tracking-toggle").click(toggleTrackingDetail);

  $("#privacy-desc, .up-arrow").hide();
  $("#privacy-toggle").click(togglePrivacy);
});

function trackChanged()
{	
    $("#auto-on-desc").toggle();	
    $("#auto-off-desc").toggle();	
}

function togglePrivacy()
{
	var id = $(this).attr("href");
	$(id).toggle();	
	
	$(".up-arrow, .down-arrow").toggle();
	return false;
}

function toggleTrackingDetail()
{
  var id = $(this).attr("href");
  $(id).toggle(); 
  
  $(".less, .more").toggle();
  return false;
}