<?php function buildCommuteTypeHeader($minCommuteType, $icon){ 
	if($minCommuteType > 0): ?>
            <section class="col1of3">  
                <img src="images/<?php echo $icon; ?>">
                <section>
                    <p class="pix-stat-number-big"><?php echo $minCommuteType; ?></p>
                    <p class="pix-stat-label">mins</p>
                </section>
            </section>
        <?php endif; 
 } ?>

<?php function createWeekHeader($title, $link, $minWalk, $minBike, $minBus, $minDrive) { ?>
		<a class="week-hide-show" href="#<?php echo $link; ?>">
            <section class="ppbanner">
                 <p>Pay Period <?php echo $title; ?></p>
            </section>
            <header class="column-container">      
            	<h2>Commute Average Time</h2>          
                <?php buildCommutetypeHeader($minWalk, "walk.png"); ?>
                <?php buildCommutetypeHeader($minBike, "bike.png"); ?>
                <?php buildCommutetypeHeader($minBus, "bus.png"); ?>
                <?php buildCommutetypeHeader($minDrive, "drive.png"); ?>
     		</header>
            <img class="section-arrow down-arrow" src="images/section-arrow-down.png">
            <hr class="header-divider">
        </a>

        <div id="<?php echo $link; ?>" class="week-section">
        	<h2>Calendar</h2>
<?php } ?>
<?php function buildDay($day, $passed_date, $minsToWork, $timeToWork, $imgToWork, $minsFromWork, $timeFromWork, $imgFromWork){ ?>
		<section class="day column-container">
            <section class="col1of3">
       		   <p class="pix-stat-number-big"><?php echo $day; ?></p>
               <p class="pix-stat-label"><?php echo $passed_date; ?></p>
            </section>
        	<section class="col1of3">
            	<img src="images/<?php echo $imgToWork; ?>">
            	<p>
                	<span  class="pix-stat-number"><?php echo $minsToWork; ?></span>
                	<span class="pix-stat-label">mins</span>
                </p>
                <p class="pix-stat-label-small"><?php echo $timeToWork; ?></p>
            </section>
            <section class="col1of3">
            	<img src="images/<?php echo $imgFromWork; ?>">
            	<p>
                	<span  class="pix-stat-number"><?php echo $minsFromWork; ?></span>
                	<span class="pix-stat-label">mins</span>
                </p>
                <p class="pix-stat-label-small"><?php echo $timeFromWork; ?></p>
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

<script src="js/commute.js"></script>

<section class="week">

    <?php createWeekHeader("3/24/14 - 4/4/14", "mar24", 240, 2, 480, 0); ?>
        <?php $date = "2014-03-24"?>
        <?php buildDay("M", addDay($date,0), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 30, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60,"7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("M", addDay($date,3), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1),20, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        
        <a class="week-hide-show" href="#mar24"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("4/7/14 - 4/14/14", "april7", 180, 180, 240, 0); ?>
        <?php $date = "2014-04-07"?>
         <?php buildDay("M", addDay($date,0), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 30, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60,"7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("M", addDay($date,3), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1),20, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <a class="week-hide-show" href="#april7"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("4/21/14 - 5/2/14", "april21", 80, 0, 180, 0); ?>
        <?php $date = "2014-04-21"?>
    	 <?php buildDay("M", addDay($date,0), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 30, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60,"7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("M", addDay($date,3), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1),20, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        
        <a class="week-hide-show" href="#april21"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("5/5/14 - 5/16/14", "may5",160, 180, 240, 0); ?>
        <?php $date = "2014-05-05"?>
    	 <?php buildDay("M", addDay($date,0), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1), 30, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60,"7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("M", addDay($date,3), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("T", addDay($date,1),20, "7:30 - 7:58", "drive.png", 20, "7:30 - 7:58", "drive.png"); ?>
        <?php buildDay("W", addDay($date,1), 40, "7:30 - 7:58", "bus.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("Th", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        <?php buildDay("F", addDay($date,1), 60, "7:30 - 7:58", "walk.png", 40, "7:30 - 7:58", "bus.png"); ?>
        
        <a class="week-hide-show" href="#may5"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>