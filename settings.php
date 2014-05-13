<?php 
	function makeSettingsDay($day, $checked)
	{
		echo "<div class='settings-day'>";
		echo "<h4>$day</h4>";
    	echo "<input type='checkbox' $checked style='min-height:20px;min-width:20px;'>";
		echo "</div>";
	}
?>

<link rel="stylesheet" href="css/jquery.onoff.css" media="screen" />
<div id="auto-track-toggle">
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

<p id="auto-on-desc">Your commute details are being automatically tracked</p>
<p id="auto-off-desc">Your commute details are not being automatically tracked</p>
<p>
Luum uses automatic tracking to report your commute details.  You will need to manually enter your commute if you choose to turn this feature off. Time spent commuting will only be available when automatic tracking is enabled.
</p>
<div id="privacy">
    <a id="privacy-toggle" href="#privacy-desc"><h3>Privacy Clause 
        <span class="down-arrow">&#9654;</span>
        <span class="up-arrow">&#9660;</span>
    </h3></a>
    <p id="privacy-desc">
    Information gathered through this application will not be used for anything other than commuting purposes.  The data collected through this application will be summarized in terms of miles, and transportation modes at a week level.  Time of arrival and departure will not be tracked.  Actual route details pertaining to your commute will not be kept or viewable by your company.
    </p>
</div>

<h3>Commuting Week</h3>
<p>Indicate the days you commute to work</p>

<?php 
	makeSettingsDay("Sunday", ""); 
	makeSettingsDay("Monday", "checked"); 
	makeSettingsDay("Tuesday", "checked"); 
	makeSettingsDay("Wednesday", "checked"); 
	makeSettingsDay("Thursday", "checked"); 
	makeSettingsDay("Friday", "checked"); 
	makeSettingsDay("Saturday", ""); 
?>