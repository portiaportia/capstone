<?php function createImpactHeaderTop($title, $link){ ?>
		<a class="impact-hide-show <?php echo $link ?>" href="<?php echo "#".$link ?>">
        	<header>
                <h2><?php echo $title; ?></h2>
                <section class="column-container">
<? } ?>
<?php 
	function createImpactHeaderBottom($link) { ?>
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