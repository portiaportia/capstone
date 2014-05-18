<?php function createImpactHeader($title, $ppTitle, $ppSavings, $yTitle, $ySavings, $link){ ?>
		<a class="impact-hide-show" href="<?php echo $link ?>">
        	<header>
            	<section class="home-section-title">
                    <!--<span class='impact-down arrow'>&#9654;</span>
                    <span class='impact-up arrow'>&#9660;</span>-->
                    <h1><?php echo $title; ?></h1>
                </section>
                <section class="ppsavings">
                    <h2>Pay Period <?php echo $ppTitle; ?></h2>
                    <p><?php echo $ppSavings; ?>
                </section>
                <section class="ysavings">
                	<h2>Yearly <?php echo $yTitle; ?></h2>
                    <p><?php echo $ySavings; ?></p>
                </section>
                <img class="section-arrow down-arrow" src="images/section-arrow-down.png">
         	</header>
        </a>
<? } ?>
<?php
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

<section class="impact">
	<?php createImpactHeader("Earnings", "Earnings", "$31", "Earnings", "$206", "#bonuses-expand"); ?>
    
    <div id="bonuses-expand" class="impact-section">
        <a class="impact-hide-show" href="#bonuses-expand">
            <div id="d3Chart-bonuses" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
			<script>
                buildChart("#d3Chart-bonuses", bonusesData);
            </script>
        </a>
    </div>
</section>

<section class="impact">
    <?php createImpactHeader("CO<sub>2</sub>", "Savings", "35 lbs", "Savings", "305 lbs", "#carbon-expand"); ?>
    
    <div id="carbon-expand" class="impact-section">
        <a class="impact-hide-show" href="#carbon-expand">
            <div id="d3Chart-carbon" class="d3Chart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
            <script>
                buildChart("#d3Chart-carbon", carbonData);
            </script>
        </a>
    </div>
</section>

<section class="impact">
	<?php createImpactHeader("Time Savings", "Savings", "30 Minutes", "Savings", "205 Minutes", "#time-expand"); ?>
    
    <div id="time-expand" class="impact-section">
        <a class="impact-hide-show" href="#time-expand">
            <div id="d3Chart-time" class="d3BarChart"></div>
            <img class="section-arrow arrow-up" src="images/section-arrow-up.png">
            <script>
                buildBarChart("#d3Chart-time");
            </script>
        </a>
    </div>
</section>