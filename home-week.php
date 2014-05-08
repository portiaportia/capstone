<?php displayCircleNav(0); ?>
<?php 
	function createWeekHeader($title, $link) { 
		echo "<a class='week-hide-show' href='$link'>";
    	echo "<header>";
        echo "<span class='week-down arrow'>&#9660;</span>";
        echo "<span class='week-up arrow'>&#9650;</span>";
        echo "<h1>$title</h1>";
     	echo "</header></a>";
	}
	
	function buildDay($day, $numBike, $numBus)
	{
		echo "<section class='day'>";
        echo "<h3>$day</h3>";
        
		if($numBike > 0) echo "<p><img src='images/bike.png'> x $numBike</p>";
        if($numBus > 0) echo "<p><img src='images/bus.png'> x $numBus</p>";
		
        echo "</section>";
	}
?>
<script src="js/home-week.js"></script>
<h2>Your Commute</h2>

<section class="week">
    <?php createWeekHeader("April 7th", "#april7"); ?>
    
    <div id="april7" class="week-section">
        <?php buildDay("M", 2, 3); ?>
        <?php buildDay("T", 1, 4); ?>
        <?php buildDay("W", 0, 5); ?>
        <?php buildDay("Th", 4, 1); ?>
        <?php buildDay("F", 3, 2); ?>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("April 14th", "#april14"); ?>
    
    <div id="april14" class="week-section">
        <?php buildDay("M", 2, 3); ?>
        <?php buildDay("T", 1, 4); ?>
        <?php buildDay("W", 0, 5); ?>
        <?php buildDay("Th", 4, 1); ?>
        <?php buildDay("F", 3, 2); ?>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("April 21st", "#april21"); ?>
    
    <div id="april21" class="week-section">
        <?php buildDay("M", 2, 3); ?>
        <?php buildDay("T", 1, 4); ?>
        <?php buildDay("W", 0, 5); ?>
        <?php buildDay("Th", 4, 1); ?>
        <?php buildDay("F", 3, 2); ?>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("April 28th", "#april28"); ?>
    
    <div id="april28" class="week-section">
        <?php buildDay("M", 2, 3); ?>
        <?php buildDay("T", 1, 4); ?>
        <?php buildDay("W", 0, 5); ?>
        <?php buildDay("Th", 4, 1); ?>
        <?php buildDay("F", 3, 2); ?>
    </div>
</section>