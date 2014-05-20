<?php 

	function makeSettingsDay($day, $checked)
	{
		echo "<section class='settings-section'>";
		echo "<div class='settings-day'>";
		echo "<h4>$day</h4>";
		echo "<a class='day-toggle' id='" . $day . "_check' href='#" . $day . "_check'>";
    	echo "<span class='unselected'";
    	if($checked){
    		echo " style='display: none;'";
    	}	
    	echo "><img src='images/circle.png'/></span>";
		echo "<span class='selected'";
		if(!$checked){
    		echo " style='display: none;'";
    	}
		echo "><img src='images/checkbox-checked.png'/></span>";
		echo "</a>";
		echo "</div>";
		echo "</section>";
	}
?>

<link rel="stylesheet" href="css/jquery.onoff.css" media="screen" />
<link rel="stylesheet" href="css/jquery.onoff.override.css" media="screen" />

<section class="settings-section first">
	<div id="privacy">
	    <a id="privacy-toggle" href="#privacy-addition">
	    	<div class="linebreak">
		    <img class="icon" src="images/privacy.png"/>
		    <h3>Privacy</h3>
		    </div>
		    <div id="privacy-desc">
		    	<p class="settings-desc">
                    Information gathered through this application will not be used 
                    for anything other than commuting purposes.  
                
                	<span id="privacy-addition">
                        The data collected through this application will be summarized 
                        in terms of miles, and transportation modes at a week level.  
                        Time of arrival and departure will not be tracked.  Actual route 
                        details pertaining to your commute will not be kept or viewable by your company.
					</span>
		    	</p>
	    	</div>
				<img class="section-arrow down-arrow-privacy" src="images/section-arrow-down.png">
		        <img class="section-arrow up-arrow-privacy" src="images/section-arrow-up.png">
	    </a>
	</div>
</section>

<!--<section class="settings-section blank"></section>-->

<section class="settings-section ">
	<div id="auto-track-toggle">
		<img class="icon" src="images/tracking.png"/>
		<h3>Automatic Tracking</h3>
		<input id="track-check" type="checkbox" checked="checked" />
	    <script src="js/jquery.onoff.min.js"></script>
		<script>
	    jQuery(function($) {
	      $('#track-check').onoff();
	    });
	    </script>
		<script src="js/settings.js"></script>
	</div>
</section>
<section class="settings-section">
	<a id="tracking-toggle" href="#tracking-detail">
        <p class="settings-desc">
            Luum uses automatic tracking to report your commute details. 
            <span id="tracking-detail">
                You will need to manually enter your commute if you choose to turn this feature off. 
                Time spent commuting will only be available when automatic tracking is enabled. 
            </span>
        </p>
        <img class="section-arrow down-arrow-tracking" src="images/section-arrow-down.png">
        <img class="section-arrow up-arrow-tracking" src="images/section-arrow-up.png">
     </a>
</section>
	
</section>