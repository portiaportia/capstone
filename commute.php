<?php function buildCommuteTypeHeader($numCommuteType, $minCommuteType, $icon){ 
	if($numCommuteType > 0): ?>
            <section class="header-ctype">
                <section class="week-stats">
                    <p><?php echo $numCommuteType; ?> Trips</p>
                    <p><?php echo $minCommuteType; ?> Mins</p>
                 </section>
                <img src="images/<?php echo $icon; ?>">
            </section>
        <?php endif; 
 } ?>

<?php function createWeekHeader($title, $link, $numWalk, $minWalk, $numBike, $minBike, $numBus, $minBus, $numDrive, $minDrive) { ?>
		<a class="week-hide-show" href="#<?php echo $link; ?>">
    		<header>
        		<h1><?php echo $title; ?></h1>
                <?php buildCommutetypeHeader($numWalk, $minWalk, "walk.png"); ?>
                <?php buildCommutetypeHeader($numBike, $minBike, "bike.png"); ?>
                <?php buildCommutetypeHeader($numBus, $minBus, "bus.png"); ?>
                <?php buildCommutetypeHeader($numDrive, $minDrive, "drive.png"); ?>
                
     		</header>
             <img class="section-arrow down-arrow" src="images/section-arrow-down.png">
        </a>
        
        <div id="<?php echo $link; ?>" class="week-section">
        <section class="day-header">
        	<h2>To Work</h2>
            <h2>From Work</h2>
        </section>
        <div class="clear"></div>
<?php } ?>
<?php function buildDay($day, $passed_date, $timeToWork, $imgToWork, $timeFromWork, $imgFromWork){ ?>
		<section class="day">
            <div class="day-date">
       		   <h3><?php echo $day; ?></h3>
               <h4><?php echo $passed_date; ?></h4>
            </div>
        	<section>
            	<p><?php echo $timeToWork; ?> mins</p>
                <img src="images/<?php echo $imgToWork; ?>">
            </section>
            <section>
                <p><?php echo $timeFromWork; ?> mins</p>
                <img src="images/<?php echo $imgFromWork; ?>">
            </section>
        </section>
<?php } ?>

<?php 
    //takes a date and adds $days_to_add days to it. This is pass by reference and will modify
    //the original. It also returns the original so it can be used inline.
    function addDay(&$passed_date, $days_to_add){
        $passed_date = date('n/j', strtotime($passed_date . ' + '.$days_to_add .' days'));
        return $passed_date;
    }
?>

<script src="js/home-week.js"></script>

<section class="week">

    <?php createWeekHeader("3/24/14 - 4/4/14", "mar24", 4, 240, 0,0, 12, 480, 4, 80); ?>
        <?php $date = "2014-03-24"?>
        <?php buildDay("M", addDay($date,0), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 30, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("M", addDay($date,3), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1),20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        
        <a class="week-hide-show" href="#mar24"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("4/7/14 - 4/14/14", "april7", 0, 0, 6, 180, 6, 240, 8,  160); ?>
        <?php $date = "2014-04-07"?>
        <?php buildDay("M", addDay($date,0), 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("M", addDay($date,3), 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        
        <a class="week-hide-show" href="#april7"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("4/21/14 - 5/2/14", "april21", 4, 240, 0,0, 12, 480, 4, 80); ?>
        <?php $date = "2014-04-21"?>
    	<?php buildDay("M", addDay($date,0), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("M", addDay($date,3), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "walk.png", 40, "bus.png"); ?>
        
        
        <a class="week-hide-show" href="#april21"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("5/5/14 - 5/16/14", "may5",0, 0, 6, 180, 6, 240, 8,  160); ?>
        <?php $date = "2014-05-05"?>
    	<?php buildDay("M", addDay($date,0), 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("M", addDay($date,3), 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 20, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", addDay($date,1), 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 20, "drive.png", 20, "drive.png"); ?>
        
        <a class="week-hide-show" href="#may5"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>