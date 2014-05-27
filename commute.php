<script src="js/commute.js"></script>
<?php 
        //this is the starting data, but we will add more fields based on the members below
    $commuteScreenData = array(
        array("date"=>"3/24/14", "link"=>"mar24", "commutes"=> array(
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"4/7/14", "link"=>"apr17", "commutes"=> array(
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"car.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"car.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"4/21/14", "link"=>"apr21", "commutes"=> array(
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"car.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"car.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"5/5/14", "link"=>"may5", "commutes"=> array(
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"car.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>20, "startTo"=>"7:30", "modeTo"=>"car.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"car.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"5/19/14", "link"=>"may19", "commutes"=> array(
                array("durationTo"=>30, "startTo"=>"7:30", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>30, "startTo"=>"7:30", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>30, "startTo"=>"7:30", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>30, "startTo"=>"7:30", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>25, "startTo"=>"7:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"6/2/14", "link"=>"jun2", "commutes"=> array(
                array("durationTo"=>25, "startTo"=>"7:31", "modeTo"=>"bus.png", "durationFrom"=>40, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>30, "startTo"=>"7:28", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>30, "startTo"=>"7:27", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>81, "startTo"=>"7:27", "modeTo"=>"walk.png", "durationFrom"=>30, "startFrom"=>"6:10", "modeFrom"=>"bus.png"),
                array("durationTo"=>80, "startTo"=>"7:33", "modeTo"=>"walk.png", "durationFrom"=>30, "startFrom"=>"6:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>40, "startTo"=>"8:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>30, "startTo"=>"8:30", "modeTo"=>"bike.png", "durationFrom"=>30, "startFrom"=>"5:15", "modeFrom"=>"bike.png"),
                array("durationTo"=>35, "startTo"=>"8:30", "modeTo"=>"bus.png", "durationFrom"=>35, "startFrom"=>"5:15", "modeFrom"=>"bus.png"),
                array("durationTo"=>79, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>35, "startFrom"=>"5:45", "modeFrom"=>"bus.png"),
                array("durationTo"=>81, "startTo"=>"7:30", "modeTo"=>"walk.png", "durationFrom"=>30, "startFrom"=>"6:15", "modeFrom"=>"bus.png")
            )
        )
    );

    foreach($commuteScreenData as $week){
        ?><section class="week">
            <?php 
                $busTotalMin = 0;
                $busTotalCnt = 0;
                $carTotalMin = 0;
                $carTotalCnt = 0;
                $bikeTotalMin = 0;
                $bikeTotalCnt = 0;
                $walkTotalMin = 0;
                $walkTotalCnt = 0;
                foreach($week["commutes"] as $commuteDay){
                    switch($commuteDay["modeTo"]) {
                        case "bus.png":
                            $busTotalMin += $commuteDay["durationTo"];
                            $busTotalCnt ++;
                            break;
                        case "car.png":
                            $carTotalMin += $commuteDay["durationTo"];
                            $carTotalCnt ++;
                            break;
                        case "bike.png":
                            $bikeTotalMin += $commuteDay["durationTo"];
                            $bikeTotalCnt ++;
                            break;
                        case "walk.png":
                            $walkTotalMin += $commuteDay["durationTo"];
                            $walkTotalCnt ++;
                            break;
                    }
                    switch($commuteDay["modeFrom"]) {
                        case "bus.png":
                            $busTotalMin += $commuteDay["durationFrom"];
                            $busTotalCnt ++;
                            break;
                        case "car.png":
                            $carTotalMin += $commuteDay["durationFrom"];
                            $carTotalCnt ++;
                            break;
                        case "bike.png":
                            $bikeTotalMin += $commuteDay["durationFrom"];
                            $bikeTotalCnt ++;
                            break;
                        case "walk.png":
                            $walkTotalMin += $commuteDay["durationFrom"];
                            $walkTotalCnt ++;
                            break;
                    }
                }
                $walkAvg = 0;
                $carAvg = 0;
                $bikeAvg = 0;
                $busAvg = 0;
                if($walkTotalCnt > 0 ){$walkAvg = round($walkTotalMin/$walkTotalCnt, 0); }else{$walkAvg = 0;}
                if($carTotalCnt > 0 ){ $carAvg = round($carTotalMin/$carTotalCnt, 0); }else{ $carAvg = 0; }
                if($bikeTotalCnt > 0 ){ $bikeAvg = round($bikeTotalMin/$bikeTotalCnt, 0); }else{ $bikeAvg = 0; }
                if($busTotalCnt > 0 ){ $busAvg = round($busTotalMin/$busTotalCnt, 0); }else{ $busAvg = 0;}

                $date = $week["date"];
                createWeekHeader($week["date"] . " - " . addDay($week["date"], 13, 'n/j/y'), $week["link"], $walkAvg, $bikeAvg, $busAvg, $carAvg); 
                
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
                    <span class="pix-stat-label">mins</span>
                </section>
                <p class="pix-stat-label-small"><?php echo $to_work; ?></p>
            </section>
            <section class="col-com-tran">
                <section class="img-row">
                    <img src="images/<?php echo $imgFromWork; ?>">
                    <p><span  class="pix-stat-number"><?php echo $minsFromWork; ?></span></p>
                    <span class="pix-stat-label">mins</span>
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



