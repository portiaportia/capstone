<?php function createImpactHeaderTop($title, $link){ ?>
		<a class="impact-hide-show" href="<?php echo $link ?>">
        	<header>
            	<section class="home-section-title">
                    <h1><?php echo $title; ?></h1>
                    <section class="home-section-title-details">
<? } ?>
<?php 
	function createImpactHeaderBottom($link) { ?>
		</section>
                </section>
                <img class="section-arrow down-arrow" src="images/section-arrow-down.png">
         	</header>
        </a>
<?php	}
?>
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