<?php include "header.php"; ?>
<?php //make sure the functions are available 
	include "build-leaderboard.php"; 
?>	
<?php include "circle-nav.php"; ?>
<div id="home" class="page current home-view">
	<?php include "home-impact.php"; ?>
</div>

<div class="page home-view">
	<?php include "home-week.php"; ?>
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