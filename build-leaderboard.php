
<div class="in-team-leaderboard leaderboard">
		
	<?php
		//we could put this into a json object and then pull out using an array with json_decode
		$people_data = array(
		array("name"=>"John Smith", "miles"=>4, "goal"=>"10", "trips"=>5, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Amy", "miles"=>16, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Taylor", "miles"=>6, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Chris", "miles"=>26, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs"),
		array("name"=>"Sharon", "miles"=>46, "goal"=>"10", "trips"=>3, "image"=>"images/person.png", "team"=>"Mobile Maniacs")
		);

		$team_data = array(
			array("name"=>"Mobile Maniacs", "image"=>"images/team4.png")
			);

		team_summary($people_data, $team_data[0]);
		create_people_list($people_data);
	?>
			
</div>

<?php
function team_summary($people_data, $team_data){
	?>
	<section class="whole-team">
	<?php
		echo "<img src=\"" . $team_data["image"] . "\"/>";
	?>
	<div class="team-stats">
	<?php
		echo "<h3>" . $team_data["name"] . "</h3>";
	?>
	<p>Fourth Place</p>
	<p>
		<strong>Goal:</strong>
		Be awesome
		</p>
		<p>
		<strong>Miles:</strong>
		32
		</p>
		<p>
		<strong>Trips:</strong>
		11
		</p>
	</div>
	<div class="progress"></div>
	</section>
<?php
}

function create_people_list($people_data) {
	usort($people_data, function($a, $b) {
    	return $b['miles'] - $a['miles'];
	});

	$position = 1;
	foreach ($people_data as $person){
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
		echo "<p>" . $person["goal"] . " Goal</p>";
		//echo "<p>" . $person["trips"] . " Trips</p>";
		echo "</div>";
		?>
		</div>
		</section>
		<?php
	}
}
?>
