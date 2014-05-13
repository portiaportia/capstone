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
<script src="js/buildChart.js"></script>

<h2>Commute Impact</h2>

<section class="impact">
    <?php createImpactHeader("Carbon Footprint", "8 lbs", "#carbon-expand"); ?>
    
    <div id="carbon-expand" class="impact-section">
        <section class="pounds">
            <div class="linebreak">
                <div class="left">    
                    <h3>May</h3>
                    <p>8lbs</p>
                    
                </div>
               	<div class="right">
                	<p><strong>High:</strong> 20lbs</p>
                    <p><strong>Low:</strong> 0lbs</p>
                </div>
            </div>
            
            <div id="d3Chart-carbon" class="d3Chart"></div>
            <script>
                buildChart("#d3Chart-carbon");
            </script>

        </section>
    </div>
</section>

<section class="impact">
	<?php createImpactHeader("Bonuses", "$30", "#bonuses-expand"); ?>
    
    <div id="bonuses-expand" class="impact-section">
        <p><strong>Bonuses: </strong>&nbsp; $30</p>
        <p><strong>Charges: </strong>&nbsp; $4</p>

        <div id="d3Chart-bonuses" class="d3Chart"></div>
        <script>
            buildChart("#d3Chart-bonuses");
        </script>

    </div>
</section>

<section class="impact">
	<?php createImpactHeader("Time Average", "30 Minutes", "#time-expand"); ?>
    
    <div id="time-expand" class="impact-section">
        <p>Time Expanded</p>
        <div id="d3Chart-time" class="d3BarChart"></div>
        <script>
            buildBarChart("#d3Chart-time");
        </script>
    </div>
</section>