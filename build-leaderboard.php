
<?php
	//set up the data to be used. Later it will be sorted
	$people_data = array(
		array("name"=>"Me", "miles"=>79, "goal"=>"10", "trips"=>34, "image"=>"images/me.png", "team"=>"Mobile Maniacs", "you"=>true),
		array("name"=>"John", "miles"=>50, "goal"=>"10", "trips"=>35, "image"=>"images/john.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Amy", "miles"=>78, "goal"=>"10", "trips"=>25, "image"=>"images/amy.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Taylor", "miles"=>60, "goal"=>"10", "trips"=>23, "image"=>"images/taylor.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Chris", "miles"=>35, "goal"=>"10", "trips"=>12, "image"=>"images/chris.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Sharon", "miles"=>90, "goal"=>"10", "trips"=>34, "image"=>"images/sharon.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Fran", "miles"=>56, "goal"=>"10", "trips"=>26, "image"=>"images/fran.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"Erin", "miles"=>110, "goal"=>"10", "trips"=>34, "image"=>"images/erin.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"Mirah", "miles"=>21, "goal"=>"10", "trips"=>15, "image"=>"images/mirah.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"Meredith", "miles"=>105, "goal"=>"10", "trips"=>17, "image"=>"images/meredith.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"James", "miles"=>60, "goal"=>"10", "trips"=>30, "image"=>"images/james.png", "team"=>"Colorful Cyclists", "you"=>false),
		array("name"=>"Andy", "miles"=>82, "goal"=>"10", "trips"=>31, "image"=>"images/andy.png", "team"=>"Colorful Cyclists", "you"=>false),
		array("name"=>"Marc", "miles"=>65, "goal"=>"10", "trips"=>31, "image"=>"images/marc.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Clarissa", "miles"=>17, "goal"=>"10", "trips"=>13, "image"=>"images/clarissa.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Omar", "miles"=>28, "goal"=>"10", "trips"=>19, "image"=>"images/omar.png", "team"=>"Ninja Riders", "you"=>false),
		array("name"=>"Pedro", "miles"=>50, "goal"=>"10", "trips"=>26, "image"=>"images/pedro.png", "team"=>"Ninja Riders", "you"=>false),
		array("name"=>"Mike", "miles"=>120, "goal"=>"10", "trips"=>24, "image"=>"images/mike.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Dave", "miles"=>78, "goal"=>"10", "trips"=>25, "image"=>"images/dave.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Bob", "miles"=>80, "goal"=>"10", "trips"=>21, "image"=>"images/bob.png", "team"=>"Ninja Riders", "you"=>false)
	);

	//this is the starting data, but we will add more fields based on the members below
	$team_data = array(
		array("name"=>"Biking Barbies", "image"=>"images/team1.png", "id"=>"biking-barbies"),
		array("name"=>"Ninja Riders", "image"=>"images/team2.png", "id"=>"ninja-riders"),
		array("name"=>"Colorful Cyclists", "image"=>"images/team3.png", "id"=>"colorful-cyclists"),
		array("name"=>"Mobile Maniacs", "image"=>"images/team4.png", "id"=>"mobile-maniacs"),
		array("name"=>"Tricksters", "image"=>"images/team5.png", "id"=>"tricksters")
	);

	//sort the people array by trips, most to least
	usort($people_data, function($a, $b) {
    	return $b['trips'] - $a['trips'];
	});

	$total_trips = get_total_trips($people_data);
	//get all of the summary details and create a new array. now the array has:
	// trips
	// miles
	// members
	// yourteam
	// avgtrips
	$new_team_data = add_team_summary_info($people_data, $team_data);
	

	//sort the team array by trips, most to least. 
	//If we need to sort by more than the trips, we should have an associated 
	//array that is sorted with the index of the team array as the value
	usort($new_team_data, function($a, $b) {
    	return $b['avgtrips'] - $a['avgtrips'];
	});
?>

<?php

function get_total_trips($people_data){
	$ret_trips = 0;
	foreach($people_data as $person){
		$ret_trips += $person["trips"];
	}

	return $ret_trips;
}


//Returns a new team array that includes summary info, #people, trips and miles
function add_team_summary_info($people_data, $team_data){
	$ret_array = [];
	foreach($team_data as $team){
		//first get an array of just the members of this team
		$ret_miles = 0;
		$ret_trips = 0;
		$ret_members = 0;
		$ret_your_team = false;
		foreach($people_data as $person){
			if($person["team"] == $team["name"]){
				$ret_miles += $person["miles"];
				$ret_trips += $person["trips"];
				$ret_members++;
				if($person["you"]){
					$ret_your_team = true;
				}
			}
		}
		$team["miles"] = $ret_miles;
		$team["trips"] = $ret_trips;
		$team["members"] = $ret_members;
		$team["yourteam"] = $ret_your_team;
		$team["avgtrips"] = round($ret_trips / $ret_members, 1);
		//add the new team to the return array
		array_push($ret_array, $team);
	}
	return $ret_array;
}


//This will build out the team page in order of the data set, with summary information
function build_team_leaderboard($people_data, $team_data){
	$position = 1;
	foreach($team_data as $team){
		?>
		<section class="leader <?php if($team["yourteam"]){ echo " your-team";} ?>">
			<a class="team-hide-show" href="#<?php echo $team["id"] ?>">
				<p class="pix-stat-number position">
				<?php
				echo $position++ . "</p>";
				echo "<img src=\"" . $team["image"] . "\">";
				echo "<div class='left'><p class='pix-stat-title-big'>" . $team["name"];
				echo "</p>";
				echo "<p class='pix-stat-label-small members-detail'>" . $team["members"] . " members</p>";
				echo "</div>";
				?>
				<div class="miles">
					
					<p>
						<span class='pix-stat-number'><?php echo $team["avgtrips"]; ?></span>
						<span class='pix-stat-label'>avg trips</span>
					</p>
					<p class='pix-stat-label-small'>
						<?php echo $team["miles"]; ?> mi
					</p>
				</div>
			</a>
			<div id="<?php echo $team["id"] ?>" class="team-members-section">
				<?php create_people_list_for_team($people_data, $team); ?>
			</div>
		</section>
	<?php
	}
}

//create list of people that belong to the passed team.
function create_people_list($people_data) {
	$position = 1;
	foreach ($people_data as $person){
		create_person_section($person, $position++, true);
	}
}

//create list of people that belong to the passed team.
function create_people_list_for_team($people_data, $team_data) {
	$position = 1;
	foreach ($people_data as $person){
		if($person["team"] == $team_data["name"]){
			create_person_section($person, $position++, false);
		}
	}
}

function create_person_section($person, $position, $include_position){
	?>
	<section class="leader person <?php if($person["you"]){ echo " you";} ?>">
		<div>
			<?php if($include_position) {
				echo "<p class='pix-stat-number position'>";
				echo $position . "</p>";
			}?>
			<?php
				echo "<img src=\"" . $person["image"] . "\">";
            	echo "<div class='left'><p class='pix-stat-title-big'>" . $person["name"];
				echo "</p>";
				if($include_position) {
					echo "<p class='pix-stat-label-small members-detail'>" . $person["team"] . "</p>";
				}
				echo "</div>";
			?>   
				<div class="miles">
					
					<p>
						<span class='pix-stat-number trips-detail'><?php echo $person["trips"]; ?></span>
						<span class='pix-stat-label miles-detail'> trips</span>
					</p>
					<p class='pix-stat-label-small miles-detail'>
						<?php echo $person["miles"]; ?> mi
					</p>
				</div>
		</div> <!--end person info (not a class or id)-->
	</section> <!-- leader end -->
	<?php 
}
//builds a progress bar
function build_progress_bar($progress, $goal){
	?>
	<div class="progress">
		<?php
		$perc_comp = ($progress / $goal)*100;
		
		echo "<p class='title'>" . number_format($progress) . " trips completed</p>";
		echo "<div class='progress-bar' style='width:" .  $perc_comp . "%; ''></div>";
		?>
		
		<div class="progress-indicator"></div>
		<div class="goal-bar"></div>
		<div class="goal-indicator"></div>
		<div class="goal">Goal: <?php echo number_format($goal) ?> trips</div>	
	</div>
	<?php
}
?>
