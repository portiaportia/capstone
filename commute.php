<script src="js/commute.js"></script>
<?php 

    foreach($commuteScreenData as $week){
        ?><section class="week">
            <?php 
                $date = $week["date"];
                createWeekHeader($week["date"] . " - " . addDay($week["date"], 13, 'n/j/y'), $week["link"], $week["walkAvg"], $week["bikeAvg"], $week["busAvg"], $week["carAvg"]); 
                
                buildWeek($week, $date);

                ?>
                <a class="week-hide-show" href="#"<?php echo $week["link"]; ?>><img class="section-arrow arrow-up" src="images/section-arrow-up.png"></a>
            </div>
        </section>
        <?php
    }

    function buildWeek($weekData, &$passedDate){

        $tempData = $weekData["commutes"][0];
        buildDay("M", addDay($passedDate, 0, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        
        $tempData = $weekData["commutes"][1];
        buildDay("T", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        
        $tempData = $weekData["commutes"][2];
        buildDay("W", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        $tempData = $weekData["commutes"][3];
        buildDay("Th", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        $tempData = $weekData["commutes"][4];
        buildDay("F", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        
        $tempData = $weekData["commutes"][5];
        buildDay("M", addDay($passedDate, 3, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        
        $tempData = $weekData["commutes"][6];
        buildDay("T", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        
        $tempData = $weekData["commutes"][7];
        buildDay("W", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        $tempData = $weekData["commutes"][8];
        buildDay("Th", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
        $tempData = $weekData["commutes"][9];
        buildDay("F", addDay($passedDate, 1, 'n/j'), 
            $tempData["durationTo"], $tempData["startTo"], $tempData["modeTo"], $tempData["durationFrom"], $tempData["startFrom"], $tempData["modeFrom"]);
                
    }
?>

<?php function buildCommuteTypeHeader($minCommuteType, $icon){ 
	if($minCommuteType > 0): ?>
            <section class="col1of3">  
                <img src="images/<?php echo $icon; ?>">
                <section>
                    <p class="pix-stat-number-big"><?php echo $minCommuteType; ?></p>
                    <p class="pix-stat-label">min</p>
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
            	<h2>Average Commute Time</h2>          
                <?php buildCommutetypeHeader($minWalk, "walk.png"); ?>
                <?php buildCommutetypeHeader($minBike, "bike.png"); ?>
                <?php buildCommutetypeHeader($minBus, "bus.png"); ?>
                <?php buildCommutetypeHeader($minDrive, "car.png"); ?>
     		</header>
            <img class="section-arrow down-arrow" src="images/section-arrow-down.png">
            <hr class="header-divider">
        </a>

        <div id="<?php echo $link; ?>" class="week-section">
        	<h2>Calendar</h2>
<?php } ?>

<?php function buildDay($day, $passed_date, $minsToWork, $startTimeTo, $imgToWork, $minsFromWork, $startTimeFrom, $imgFromWork){ 
    $time = strtotime($startTimeTo);
    $to_work = date('g:i', strtotime(' +'.$minsToWork.' minutes', $time));
    $to_work = $startTimeTo . " am - " . $to_work . " am";

    $time = strtotime($startTimeFrom);
    $from_work = date('g:i', strtotime(' +'.$minsFromWork.' minutes', $time));
    $from_work = $startTimeFrom . " pm - " . $from_work . " pm";

    ?>
        <section class="day column-container">
            <section class="col-com-day">
               <p class="pix-stat-number-big"><?php echo $day; ?></p>
               <p class="pix-stat-label"><?php echo $passed_date; ?></p>
            </section>
            <section class="col-com-tran">
                <section class="img-row">
                    <img src="images/<?php echo $imgToWork; ?>">
                    <p><span  class="pix-stat-number"><?php echo $minsToWork; ?></span></p>
                    <span class="pix-stat-label">min</span>
                </section>
                <p class="pix-stat-label-small"><?php echo $to_work; ?></p>
            </section>
            <section class="col-com-tran">
                <section class="img-row">
                    <img src="images/<?php echo $imgFromWork; ?>">
                    <p><span  class="pix-stat-number"><?php echo $minsFromWork; ?></span></p>
                    <span class="pix-stat-label">min</span>
                </section>
                <p class="pix-stat-label-small"><?php echo $from_work; ?></p>
            </section>
        </section>
<?php } ?>

<?php 
    //takes a date and adds $days_to_add days to it. This is pass by reference and will modify
    //the original. It also returns the original so it can be used inline.
    //takes the format, like 'n/j' for month/day
    function addDay(&$passed_date, $days_to_add, $format){
        $passed_date = date($format, strtotime($passed_date . ' + '.$days_to_add .' days'));
        return $passed_date;
    }
?>



