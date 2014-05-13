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
<?php function buildDay($day, $timeToWork, $imgToWork, $timeFromWork, $imgFromWork){ ?>
		<section class="day">
       		<h3><?php echo $day; ?></h3>
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
<script src="js/home-week.js"></script>

<section class="week">
    <?php createWeekHeader("3/24/14 - 4/4/14", "mar24", 4, 240, 0,0, 12, 480, 4, 80); ?>
    
        <?php buildDay("M", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("M", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", 60, "walk.png", 40, "bus.png"); ?>
        
        <a class="week-hide-show" href="#mar24"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("4/7/14 - 4/14/14", "april7", 0, 0, 6, 180, 6, 240, 8,  160); ?>
    
        <?php buildDay("M", 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("M", 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", 20, "drive.png", 20, "drive.png"); ?>
        
        <a class="week-hide-show" href="#april7"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("4/21/14 - 5/2/14", "april21", 4, 240, 0,0, 12, 480, 4, 80); ?>
    
    	<?php buildDay("M", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("M", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("Th", 60, "walk.png", 40, "bus.png"); ?>
        <?php buildDay("F", 60, "walk.png", 40, "bus.png"); ?>
        
        
        <a class="week-hide-show" href="#april21"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>

<section class="week">
    <?php createWeekHeader("5/5/14 - 5/16/14", "may5",0, 0, 6, 180, 6, 240, 8,  160); ?>
    
    	<?php buildDay("M", 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("M", 30, "bike.png", 40, "bus.png"); ?>
        <?php buildDay("T", 20, "drive.png", 20, "drive.png"); ?>
        <?php buildDay("W", 30, "bike.png", 30, "bike.png"); ?>
        <?php buildDay("Th", 40, "bus.png", 40, "bus.png"); ?>
        <?php buildDay("F", 20, "drive.png", 20, "drive.png"); ?>
        
        <a class="week-hide-show" href="#may5"><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
    </div>
</section>