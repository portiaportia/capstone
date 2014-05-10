<?php displayCircleNav(0); ?>
<?php 
	function createImpactHeader($title, $subTitle, $link) { 
		echo "<a class='impact-hide-show' href='$link'>";
    	echo "<header>";
        echo "<span class='impact-down arrow'>&#9654;</span>";
        echo "<span class='impact-up arrow'>&#9660;</span>";
        echo "<h1>$title</h1>";
        echo "<p>$subTitle</p>";
     	echo "</header></a>";
	}

    function createVertGraph($goal, $progress) {
        ?>
        <div class="vert-graph left">
          <?php
            $perc_comp = (($progress / $goal)*.95)*100;
        
        
        echo "<div class='progress-bar' style='height:$perc_comp%; '></div>";
        ?>
        
        <!--<div class="progress-indicator"></div>-->
        <div class="goal-bar" style="height: 95%;"></div>
        <div class="goal-indicator" style="bottom: 95%;"></div>
        </div>
        <?php
    }
?>
<script src="js/home-impact.js"></script>
<h2>Commute Impact</h2>

<section class="impact">
    <?php createImpactHeader("Carbon Footprint", "8 lbs", "#carbon-expand"); ?>
    
    <div id="carbon-expand" class="impact-section">
        <section class="pounds">
            <div class="left">    
                <h3>May</h3>
                <p>8lbs</p>
                <?php createVertGraph(8, 20); ?>
            </div>
           	<div class="right">
            	<p><strong>High:</strong> 20lbs</p>
                <p><strong>Low:</strong> 0lbs</p>
            </div>
            
        </section>
    </div>
</section>

<section class="impact">
	<?php createImpactHeader("Bonuses", "$30", "#bonuses-expand"); ?>
    
    <div id="bonuses-expand" class="impact-section">
        <p><strong>Bonuses: </strong>&nbsp; $30</p>
        <p><strong>Charges: </strong>&nbsp; $4</p>
    </div>
</section>

<section class="impact">
	<?php createImpactHeader("Time Average", "30 Minutes", "#time-expand"); ?>
    
    <div id="time-expand" class="impact-section">
        <p>Time Expanded</p>
    </div>
</section>