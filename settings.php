<?php 
	function makeSettingsDay($day, $checked)
	{
		echo "<section class='settings-section'>";
		echo "<div class='settings-day'>";
		echo "<h4>$day</h4>";
    	echo "<input type='checkbox' $checked style='min-height:20px;min-width:20px;'>";
		echo "</div>";
		echo "</section>";
	}
?>

<link rel="stylesheet" href="css/jquery.onoff.css" media="screen" />
<section class="settings-section first">
	<div id="auto-track-toggle">
		<img src="images/tracking.png"/>
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
	<p>
		Luum uses automatic tracking to report your commute details. 
		<span id="tracking-detail">
			You will need to manually enter your commute if you choose to turn this feature off. 
			Time spent commuting will only be available when automatic tracking is enabled. 
		</span>
		<a id="tracking-toggle" href="#tracking-detail">
			<span class="more">More</span>
			<span class="less">Less</span>
		</a>
	</p>
</section>

<section class="settings-section">
	<div id="privacy">
	    <a id="privacy-toggle" href="#privacy-desc">
	    <img src="images/privacy.png"/>
	    <h3>Privacy  
	        <span class="down-arrow">&#9654;</span>
	        <span class="up-arrow">&#9660;</span>
	    </h3></a>
	    <p id="privacy-desc">
	    Information gathered through this application will not be used for anything other than commuting purposes.  The data collected through this application will be summarized in terms of miles, and transportation modes at a week level.  Time of arrival and departure will not be tracked.  Actual route details pertaining to your commute will not be kept or viewable by your company.
	    </p>
	</div>
</section>

<section class="settings-section blank">

</section>

<section class="settings-section">
	<img src="images/commute.png"/>
	<h3>Commute Week</h3>
</section>
	<p>Indicate the days you commute to work. 
	Unselected days do not show up on the "Commute" screen.</p>
	<span>
	<?php 
		makeSettingsDay("Sunday", ""); 
		makeSettingsDay("Monday", "checked"); 
		makeSettingsDay("Tuesday", "checked"); 
		makeSettingsDay("Wednesday", "checked"); 
		makeSettingsDay("Thursday", "checked"); 
		makeSettingsDay("Friday", "checked"); 
		makeSettingsDay("Saturday", ""); 
	?>
	</span>
</section>