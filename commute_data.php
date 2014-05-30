<?php

    //this is the starting data, but we will add more fields based on the members below
    function busRand($type){
        if($type == "am"){
            return rand(21,26);
        }else if($type == "pm"){
            return rand(34,38);
        }else if($type == "good"){
            return rand(20,23);
        }else if($type == "bad"){
            return rand(38,45);
        }
    }
    function bikeRand(){
        return rand(27,33);
    }
    function carRand($type){
        if($type == "am"){
            return rand(19,25);
        }else if($type == "pm"){
            return rand(25,35);
        }else if($type == "good"){
            return rand(17,23);
        }else if($type == "bad"){
            return rand(35,45);
        }
    }

    function walkRand(){
        return rand(75,83);
    }

    $rawCommuteData = array(
        array("date"=>"3/10/14", "link"=>"mar10", "commutes"=> array(
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"3/24/14", "link"=>"mar24", "commutes"=> array(
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>walkRand(),    "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png","durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>walkRand(),    "startFrom"=>"5:".rand(10,59), "modeFrom"=>"walk.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"4/7/14", "link"=>"apr17", "commutes"=> array(
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"4/21/14", "link"=>"apr21", "commutes"=> array(
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"5/5/14", "link"=>"may5", "commutes"=> array(
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>carRand("am"), "startTo"=>"7:".rand(10,59), "modeTo"=>"car.png", "durationFrom"=>carRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"car.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>walkRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"walk.png")
            )
        ),
        array("date"=>"5/19/14", "link"=>"may19", "commutes"=> array(
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>walkRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"walk.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>busRand("am"), "startTo"=>"7:".rand(29,33), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png")
            )
        ),
        array("date"=>"6/2/14", "link"=>"jun2", "commutes"=> array(
                array("durationTo"=>busRand("am"), "startTo"=>"7:31", "modeTo"=>"bus.png", "durationFrom"=>busRand("bad"), "startFrom"=>"5:05", "modeFrom"=>"bus.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:28", "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"7:27", "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>walkRand(), "startFrom"=>"6:10", "modeFrom"=>"walk.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>walkRand(), "startFrom"=>"6:15", "modeFrom"=>"walk.png"),
                array("durationTo"=>busRand("bad"),"startTo"=>"8:".rand(25,45), "modeTo"=>"bus.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bus.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"8:".rand(25,45), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>bikeRand(), "startTo"=>"8:".rand(25,45), "modeTo"=>"bike.png", "durationFrom"=>bikeRand(), "startFrom"=>"5:".rand(10,59), "modeFrom"=>"bike.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("pm"), "startFrom"=>"5:45", "modeFrom"=>"bus.png"),
                array("durationTo"=>walkRand(), "startTo"=>"7:".rand(10,59), "modeTo"=>"walk.png", "durationFrom"=>busRand("good"), "startFrom"=>"6:15", "modeFrom"=>"bus.png")
            )
        )
    );

    $commuteScreenData = [];
    foreach($rawCommuteData as $week){          
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
        
        $week["walkAvg"] = $walkAvg;
        $week["carAvg"] = $carAvg;
        $week["bikeAvg"] = $bikeAvg;
        $week["busAvg"] = $busAvg;

        $week["walkTotalCnt"] = $walkTotalCnt;
        $week["carTotalCnt"] = $carTotalCnt;
        $week["bikeTotalCnt"] = $bikeTotalCnt;
        $week["busTotalCnt"] = $busTotalCnt;
        array_push($commuteScreenData, $week);
    }
    
?>

<script type="text/javascript">
    var jsCommuteData = <?php echo json_encode($commuteScreenData); ?>;
/*
    alert(jsCommuteData[0].date + jsCommuteData[1].date);
    alert(jsCommuteData[0].carTotalCnt);
*/
    // Dot notation can be used if key/name is simple:

    var commuteData = [ 
    { xval: jsCommuteData[0].date, car: jsCommuteData[0].carTotalCnt, bike: jsCommuteData[0].bikeTotalCnt, bus: jsCommuteData[0].busTotalCnt, walk: jsCommuteData[0].walkTotalCnt }, 
    { xval: jsCommuteData[1].date, car: jsCommuteData[1].carTotalCnt, bike: jsCommuteData[1].bikeTotalCnt, bus: jsCommuteData[1].busTotalCnt, walk: jsCommuteData[1].walkTotalCnt }, 
    { xval: jsCommuteData[2].date, car: jsCommuteData[2].carTotalCnt, bike: jsCommuteData[2].bikeTotalCnt, bus: jsCommuteData[2].busTotalCnt, walk: jsCommuteData[2].walkTotalCnt }, 
    { xval: jsCommuteData[3].date, car: jsCommuteData[3].carTotalCnt, bike: jsCommuteData[3].bikeTotalCnt, bus: jsCommuteData[3].busTotalCnt, walk: jsCommuteData[3].walkTotalCnt }, 
    { xval: jsCommuteData[4].date, car: jsCommuteData[4].carTotalCnt, bike: jsCommuteData[4].bikeTotalCnt, bus: jsCommuteData[4].busTotalCnt, walk: jsCommuteData[4].walkTotalCnt }, 
    { xval: jsCommuteData[5].date, car: jsCommuteData[5].carTotalCnt, bike: jsCommuteData[5].bikeTotalCnt, bus: jsCommuteData[5].busTotalCnt, walk: jsCommuteData[5].walkTotalCnt }, 
    { xval: jsCommuteData[6].date, car: jsCommuteData[6].carTotalCnt, bike: jsCommuteData[6].bikeTotalCnt, bus: jsCommuteData[6].busTotalCnt, walk: jsCommuteData[6].walkTotalCnt }
];
</script>