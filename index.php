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
		<?php include "challenges.php"; ?>
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