<?php include "header.php"; ?>
<?php //make sure the functions are available 
	include "build-leaderboard.php"; 
?>	

<div id="summary" class="page current">
	<header class="page-title">
		<h1>Dashboard</h1>
	</header>	
	<div class="container">
		<?php include "summary.php"; ?>
	</div>
</div>

<div id="commute" class="page home-view">
	<header class="page-title">
		<h1>Commute</h1>
	</header>
	<div class="container">
		<?php include "commute.php"; ?>
	</div>
</div>

<script src="js/challenges.js"></script>
<div id="challenges" class="page">
	<header class="page-title">
		<h1>Challenges</h1>
	</header>
	<div class="container">
		<div id="challenge-mode">
			<ul>
				<li><a href="#team-home" class="team-toggle">
	            	<img src="images/team-selected.png">
	                <img class="unselected" src="images/team-unselected.png">
	                Team
	            </a></li>
				<li><a href="#individual-home" class="team-toggle">
	            	<img class="unselected" src="images/individual-selected.png">
	                <img src="images/individual-unselected.png">
	                Individual
	            </a></li>
			</ul>
		</div>
	    <div id="team-home" class="content currentContent">
	        <?php include "challenge-team.php"; ?>
	    </div>
		
		<div id="individual-home" class="content">
			<?php include "challenge-individual.php"; ?>
		</div>
	</div>
</div><!-- end page -->


<div id="settings" class="page">
	<header class="page-title">
		<h1>Settings</h1>
	</header>
	<div class="container">
		<?php include "settings.php"; ?>
	</div>
</div><!-- end page -->

<?php include "bottom-nav.php"; ?>

<?php include "footer.php"; ?>