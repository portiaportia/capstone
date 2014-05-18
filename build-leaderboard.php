
<?php
	//set up the data to be used. Later it will be sorted
	$people_data = array(
		array("name"=>"Me", "miles"=>32, "goal"=>"10", "trips"=>16, "image"=>"images/person.png", "team"=>"Mobile Maniacs", "you"=>true),
		array("name"=>"John Smith", "miles"=>50, "goal"=>"10", "trips"=>19, "image"=>"images/person.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Amy", "miles"=>78, "goal"=>"10", "trips"=>25, "image"=>"images/person.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Taylor", "miles"=>60, "goal"=>"10", "trips"=>23, "image"=>"images/person.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Chris", "miles"=>35, "goal"=>"10", "trips"=>6, "image"=>"images/person.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Sharon", "miles"=>90, "goal"=>"10", "trips"=>34, "image"=>"images/person.png", "team"=>"Mobile Maniacs", "you"=>false),
		array("name"=>"Fran", "miles"=>56, "goal"=>"10", "trips"=>26, "image"=>"images/person.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"Erin", "miles"=>110, "goal"=>"10", "trips"=>34, "image"=>"images/person.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"Mirah", "miles"=>21, "goal"=>"10", "trips"=>15, "image"=>"images/person.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"Meredith", "miles"=>105, "goal"=>"10", "trips"=>7, "image"=>"images/person.png", "team"=>"Biking Barbies", "you"=>false),
		array("name"=>"James", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Colorful Cyclists", "you"=>false),
		array("name"=>"Andy", "miles"=>21, "goal"=>"10", "trips"=>4, "image"=>"images/person.png", "team"=>"Colorful Cyclists", "you"=>false),
		array("name"=>"Mark", "miles"=>35, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Clarissa", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Omar", "miles"=>28, "goal"=>"10", "trips"=>10, "image"=>"images/person.png", "team"=>"Ninja Riders", "you"=>false),
		array("name"=>"Pedro", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Ninja Riders", "you"=>false),
		array("name"=>"Mike", "miles"=>25, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Dave", "miles"=>7, "goal"=>"10", "trips"=>7, "image"=>"images/person.png", "team"=>"Tricksters", "you"=>false),
		array("name"=>"Bob", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Ninja Riders", "you"=>false)
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
				<p class="position">
				<?php
				echo $position++ . "</p>";
				echo "<img src=\"" . $team["image"] . "\">";
				echo "<div class='left'><h1>" . $team["name"];
				echo "</h1>";
				echo "<p class='members_detail'>" . $team["members"] . " members</p>";
				echo "</div>";
				?>
				<div class="miles">
					<?php
					echo "<p class='trips_detail'>" . $team["avgtrips"] . " avg trips</p>";
					echo "<p class='miles_detail'>" . $team["miles"] . " miles</p>";
					?>
				</div>
			</a>
			<div id="<?php echo $team["id"] ?>" class="team-members-section">
				<?php create_people_list_for_team($people_data, $team); ?>
			</div>
		</section>
	<?php
	}
}

//builds out the team details page for each team
function build_team_pages($people_data, $team_data){
	foreach($team_data as $team){
	?>
	<div id="<?php echo $team["id"] ?>" class="content team-details">
		<header>
			<a href="#team-home">
				<h2 class="team-home-header">&#9664; All Teams</h2>
			</a>
		</header>
		<?php team_summary($team); ?>
		<div class="in-team-leaderboard leaderboard">
			<?php
			create_people_list_for_team($people_data, $team);
			?>
		</div> <!--in-team-leaderboard end-->		
	</div> <!-- team-details end -->
	<?php
	}
}

//builds the team summary information
function team_summary($team){
	?>
	<section class="whole-team">
		<?php
			echo "<img src=\"" . $team["image"] . "\"/>";
		?>
		<div class="team-stats">
			<?php
			echo "<h3>" . $team["name"] . "</h3>";
			?>
			<div class="linebreak">
				<p class="trips_detail"><?php echo $team["trips"] ?> trips</p>
				<p class="miles_detail"><?php echo $team["miles"] ?> miles</p>
			</div>
			<p class="members_detail"><?php echo $team["members"] ?> members</p>

		</div> <!--team-stats end-->
		<?php build_progress_bar(10000, 25000); ?>
	</section><!-- whole-team end-->
<?php
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
				echo "<p class='position'>";
				echo $position . "</p>";
			}?>
			<?php
			echo "<img src=\"" . $person["image"] . "\">";
			echo "<h1>" . $person["name"];
			echo "</h1>";
			echo "<div class='miles'>";
			echo "<p class='trips_detail'>" . $person["trips"] . " trips</p>";
			echo "<p class='miles_detail'>" . $person["miles"] . " miles</p>";
			echo "</div>";
			?>
		</div> <!--end person info (not a class or id)-->
	</section> <!-- leader end -->
	<?php 
}
//builds a progress bar
function build_progress_bar($progress, $goal){
	?>
	<div class="progress">
		<?php
		$perc_comp = (($progress / $goal)*.95)*100;
		
		echo "<p class='title'>" . number_format($progress) . " total trips</p>";
		echo "<div class='progress-bar' style='width:" .  $perc_comp . "%; ''></div>";
		?>
		
		<div class="progress-indicator"></div>
		<div class="goal-bar" style="width: 95%;"></div>
		<div class="goal-indicator" style="left: 95%;"></div>
		<div class="goal">Goal: <?php echo number_format($goal) ?> trips</div>	
	</div>
	<?php
}
?>
