
<?php
	//set up the data to be used.
	$people_data = array(
		array("name"=>"John Smith", "miles"=>4, "goal"=>"10", "trips"=>5, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Amy", "miles"=>16, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Taylor", "miles"=>6, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Chris", "miles"=>26, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Sharon", "miles"=>46, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Fran", "miles"=>56, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies"),
		array("name"=>"Erin", "miles"=>23, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies"),
		array("name"=>"Mirah", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies"),
		array("name"=>"Meredith", "miles"=>18, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies"),
		array("name"=>"James", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Colorful Cyclists"),
		array("name"=>"Andy", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Colorful Cyclists"),
		array("name"=>"Mark", "miles"=>35, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Tricksters"),
		array("name"=>"Clarissa", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Tricksters"),
		array("name"=>"Omar", "miles"=>28, "goal"=>"10", "trips"=>10, "image"=>"images/person.png", "team"=>"Ninja Riders"),
		array("name"=>"Pedro", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Ninja Riders"),
		array("name"=>"Mike", "miles"=>25, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Tricksters"),
		array("name"=>"Dave", "miles"=>7, "goal"=>"10", "trips"=>7, "image"=>"images/person.png", "team"=>"Tricksters"),
		array("name"=>"Bob", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Ninja Riders"),
	);

	$team_data = array(
		array("name"=>"Biking Barbies", "image"=>"images/team1.png", "id"=>"biking-barbies"),
		array("name"=>"Ninja Riders", "image"=>"images/team2.png", "id"=>"ninja-riders"),
		array("name"=>"Colorful Cyclists", "image"=>"images/team3.png", "id"=>"colorful-cyclists"),
		array("name"=>"Mobile Maniacs", "image"=>"images/team4.png", "id"=>"mobile-maniacs"),
		array("name"=>"Tricksters", "image"=>"images/team5.png", "id"=>"tricksters")
	);

	//sort the people array by miles, most to least
	usort($people_data, function($a, $b) {
    	return $b['miles'] - $a['miles'];
	});

	//sort the team array by miles, most to least
	//TODO
?>

<?php

//This will build out the team page in order of the data set, with summary information
function build_team_leaderboard($people_data, $team_data){
	$position = 1;
	foreach($team_data as $team){
		?>
		<section class="leader">
			<a href="#<?php echo $team["id"] ?>">
				<p class="position">
				<?php
				echo $position . "</p>";
				echo "<img src=\"" . $team["image"] . "\">";
				echo "<h1>" . $team["name"] . "</h1>";
				$totals = get_team_totals($people_data, $team);
				?>
				<div class="miles">
					<?php
					echo "<p>" . $totals["trips"] . " trips</p>";
					echo "<p>" . $totals["miles"] . " miles</p>";
					?>
				</div>
			</a>
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
				<img src="images/arrow.png">
				<h2>All Teams</h2>
			</a>
		</header>
		<?php
		team_summary($people_data, $team);
		?>
		<div class="in-team-leaderboard leaderboard">
			<?php
			create_people_list($people_data, $team);
			?>
		</div> <!--in-team-leaderboard end-->		
	</div> <!-- team-details end -->
	<?php
	}
}

//builds the team summary information
function team_summary($people_data, $team_data){
	?>
	<section class="whole-team">
		<?php
			echo "<img src=\"" . $team_data["image"] . "\"/>";
		?>
		<div class="team-stats">
			<?php
			echo "<h3>" . $team_data["name"] . "</h3>";

			$totals = get_team_totals($people_data, $team_data);
			?>
			<p>Fourth Place</p>
			<p><strong>Goal:</strong>Be awesome</p>
			<p><strong>Miles:</strong><?php echo $totals["miles"] ?></p>
			<p><strong>Trips:</strong><?php echo $totals["trips"] ?></p>
		</div> <!--team-stats end-->
		<?php build_progress_bar($totals["miles"], 150); ?>
	</section><!-- whole-team end-->
<?php
}

//builds a progress bar
function build_progress_bar($progress, $goal){
	?>
	<div class="progress">
			<?php
			$perc_comp = (($progress / $goal)*.95)*100;

			echo "<p>Goal Progress: " . $progress . " of " . $goal . " miles</p>";
			echo "<div class=\"progress-bar\" style=\"width:" .  $perc_comp . "%; \"></div>";
			?>
			<div class="progress-indicator"></div>
			<div class="goal-bar" style="width: 95%;"></div>
			<div class="goal-indicator" style="left: 95%;"></div>
		</div>
		<?php
}


//Returns an array of trips and miles
function get_team_totals($people_data, $team_data){
	//first get an array of just the members of this team
	$ret_miles = 0;
	$ret_trips = 0;
	foreach($people_data as $person){
		if($person["team"] == $team_data["name"]){
			$ret_miles += $person["miles"];
			$ret_trips += $person["trips"];
		}
	}

	return array("miles"=>$ret_miles, "trips"=>$ret_trips);
}

//create list of people that belong to the passed team.
function create_people_list($people_data, $team_data) {
	$position = 1;
	foreach ($people_data as $person){
		if($person["team"] == $team_data["name"]){
			?>
			<section class="leader">
				<div>
					<p class="position">
					<?php
					echo $position++ . "</p>";
					echo "<img src=\"" . $person["image"] . "\">";
					echo "<h1>" . $person["name"] . "</h1>";
					echo "<div class=\"miles\">";
					echo "<p>" . $person["miles"] . " Miles</p>";
					//echo "<p>" . $person["goal"] . " Goal</p>";
					echo "<p>" . $person["trips"] . " Trips</p>";
					echo "</div>";
					?>
				</div> <!--end person info (not a class or id)-->
			</section> <!-- leader end -->
			<?php 
		}
	}
}
?>
