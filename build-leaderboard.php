
<?php
	//we could put this into a json object and then pull out using an array with json_decode
	$people_data = array(
		array("name"=>"John Smith", "miles"=>4, "goal"=>"10", "trips"=>5, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Amy", "miles"=>16, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Taylor", "miles"=>6, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Chris", "miles"=>26, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Sharon", "miles"=>46, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Fran", "miles"=>56, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies"),
		array("name"=>"Erin", "miles"=>23, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies"),
		array("name"=>"Mirah", "miles"=>21, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Biking Barbies")
	);

	$team_data = array(
		array("name"=>"Mobile Maniacs", "image"=>"images/team4.png", "id"=>"mobile-maniacs"),
		array("name"=>"Biking Barbies", "image"=>"images/team4.png", "id"=>"biking-barbies")
		);

	usort($people_data, function($a, $b) {
    	return $b['miles'] - $a['miles'];
	});
?>

<?php 
	build_team_pages($people_data, $team_data);
?>

<?php
function build_team_pages($people_data, $team_data){
	foreach($team_data as $team){
	?>
	<div id= <?php echo $team["id"] ?> class="content team-details">
			<header>
				<a href="#team-home">
					<img src="images/arrow.png">
					<h2>All Teams</h2>
				</a>
			</header>
			</section>
		<div class="in-team-leaderboard leaderboard">
		<?php
			team_summary($people_data, $team);
			create_people_list($people_data, $team);
		?>
		</div>		
	</div>
	<?php
	}
}

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
	<p>
		<strong>Goal:</strong>
		Be awesome
		</p>
		<p>
		<strong>Miles:</strong>
		<?php echo $totals["miles"] ?>
		</p>
		<p>
		<strong>Trips:</strong>
		<?php echo $totals["trips"] ?>
		</p>
	</div>
	<div class="progress"></div>
	</section>
	<script>buildProgressBar([{goal: 100, progress: <?php echo $totals["miles"] ?>}], "#biking-barbies");</script>
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
			</div>
			</section>
			<?php 
		}
	}
}
?>
