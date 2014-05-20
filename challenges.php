<section class="challenge-title">
    <h2>Ride in the Rain</h2>
    <?php build_progress_bar(10000, 25000); ?> 
    <div class="days-left">
		<p class="pix-stat-number-big">5</p>
		<p class="pix-stat-label">days left</p>       
    </div>   
</section>
<div id="challenge-mode">
    <p>View Leaderboard by:</p>
    <a href="#team-home" class="team-toggle">
        <img src="images/team-selected.png">
        <img class="unselected" src="images/team-unselected.png">
    </a><a href="#individual-home" class="team-toggle">
         <img class="unselected" src="images/individual-selected.png">
         <img src="images/individual-unselected.png">
    </a>
</div>
<div id="team-home" class="content currentContent">
	<h2>Team Leaderboard</h2>
    <div class="team-leaderboard leaderboard">
	    <?php build_team_leaderboard($people_data, $new_team_data);?>
	</div> <!--team-leaderboard end-->
</div>

<div id="individual-home" class="content">
	<div class="invididual-leaderboard leaderboard">
		<?php create_people_list($people_data); ?>
	</div>
</div>