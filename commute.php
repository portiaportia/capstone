<?php 
	function createWeekHeader($title, $link) { 
		echo "<a class='week-hide-show' href='$link'>";
    	echo "<header>";
        echo "<span class='week-down arrow'>&#9654;</span>";
        echo "<span class='week-up arrow'>&#9660;</span>";
        echo "<h1>$title</h1>";
     	echo "</header></a>";
	}
	
	function buildDay($day, $numBike, $numBus, $numCar)
	{
		echo "<section class='day'>";
        echo "<h3>$day</h3>";
        
		if($numBike > 0) echo "<p>$numBike <img src='images/bike.png'></p>";
        if($numBus > 0) echo "<p>$numBus <img src='images/bus.png'></p>";
		if($numCar > 0) echo "<p>$numCar <img src='images/drive.png'></p>";
		
        echo "</section>";
	}
?>
<script src="js/home-week.js"></script>

<section class="week">
    <?php createWeekHeader("April 7th", "#april7"); ?>
    
    <div id="april7" class="week-section">
        <?php buildDay("M", 2, 2, 1); ?>
        <?php buildDay("T", 1, 2, 2); ?>
        <?php buildDay("W", 0, 4, 1); ?>
        <?php buildDay("Th", 4, 1, 0); ?>
        <?php buildDay("F", 3, 2, 0); ?>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("April 14th", "#april14"); ?>
    
    <div id="april14" class="week-section">
        <?php buildDay("M", 2, 2, 1); ?>
        <?php buildDay("T", 1, 2, 2); ?>
        <?php buildDay("W", 0, 5, 0); ?>
        <?php buildDay("Th", 4, 1, 0); ?>
        <?php buildDay("F", 3, 2, 0); ?>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("April 21st", "#april21"); ?>
    
    <div id="april21" class="week-section">
        <?php buildDay("M", 2, 3, 0); ?>
        <?php buildDay("T", 1, 2, 2); ?>
        <?php buildDay("W", 0, 5, 0); ?>
        <?php buildDay("Th", 4, 0, 1); ?>
        <?php buildDay("F", 3, 2, 0); ?>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("April 28th", "#april28"); ?>
    
    <div id="april28" class="week-section">
        <?php buildDay("M", 2, 2, 1); ?>
        <?php buildDay("T", 1, 3, 1); ?>
        <?php buildDay("W", 0, 5, 0); ?>
        <?php buildDay("Th", 2, 1, 2); ?>
        <?php buildDay("F", 3, 2, 0); ?>
    </div>
</section>