<?php include "header.php"; ?>
<?php //make sure the functions are available 
	include "build-leaderboard.php"; 
?>	
<?php include "circle-nav.php"; ?>
<div id="home" class="page current home-view">
	<?php displayCircleNav(0); ?>
   	<h2>Today</h2>
    <p><strong>Bonuses:</strong>&nbsp; $4</p>
    <p><strong>Charges:</strong>&nbsp; $0</p>
    <p><strong>Carbon Footprint:</strong>&nbsp; NA</p>
    <div class="transport-types">
        <section class="transport-type">
            <img src="images/bus.png">
            <div clas="breakdown">
                <p>3 Miles</p>
                <p>20 Minutes</p>                
            </div>
        </section>
        <section class="transport-type">
            <img src="images/bike.png">
            <div clas="breakdown">
                <p>1 Miles</p>
                <p>23 Minutes</p>                
            </div>
        </section>
	</div>
</div>

<div class="page home-view">
	<?php displayCircleNav(1); ?>
	<h2>Page 2</h2>
</div>

<div class="page home-view">
	<?php displayCircleNav(2); ?>
	<h2>Page 3</h2>
</div>

<div id="team" class="page">
    <div id="team-home" class="content currentContent">
        <section class="challenge-title">
            <div class="left">
            <h2>Team Challenge</h2>
            <h3>Ride in the Rain</h3>
            <h4>Who can bike the most miles</h4>
            </div>
            <div class="right">
            <p class="days-left">5 days left</p>
            </div>
        </section>
        <div class="team-leaderboard leaderboard">
            <?php build_team_leaderboard($people_data, $new_team_data);?>
        </div> <!--team-leaderboard end-->
    </div>
	<?php build_team_pages($people_data, $new_team_data); ?>
</div><!-- end page -->

<div id="leaderboard" class="page">
	<h2>Leaderboard</h2>
    <div class="me-others-leaderboard leaderboard">
        <?php build_team_leaderboard($people_data, $new_team_data);?>
    </div>
</div><!-- end page -->


<div id="settings" class="page">
	<?php include "settings.php"; ?>
</div><!-- end page -->

<script src="js/leaderboards.js"></script>
<?php include "bottom-nav.php"; ?>

<?php include "footer.php"; ?>