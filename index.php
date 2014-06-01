<?php include "header.php"; ?>
<?php //make sure the functions are available 
	include "build-leaderboard.php"; 
	include "summary-include.php";
?>	

<div id="summary" class="page current">
	<header>
		<section class="page-title dashboard">
			<a href="#" class="page-title-a"><h1>Dashboard</h1></a>
		</section>
		<section class="ppbanner dashboard">
			<p class="left-arrow"><a href="#summary1">&lt;</a></p>
	    	<p>Pay Period 6/2/14 - 6/15/14</p>
		</section>
	</header>

	<div class="container dashboard">
		<?php include "summary.php"; ?>
	</div>
</div>
<div id="summary1" class="page">
	<header>
		<section class="page-title dashboard">
			<a href="#" class="page-title-a"><h1>Dashboard</h1></a>
		</section>
		<section class="ppbanner dashboard">
			<p>Pay Period 5/19/14 - 6/1/14</p>
		    <p class="right-arrow"><a href="#summary">&gt;</a></p>
		</section>
	</header>

	<div class="container dashboard">
		<?php include "summary1.php"; ?>
	</div>
</div>

<div id="commute" class="page home-view">
	<header class="page-title">
		<a href="#" class="page-title-a"><h1>Commute</h1></a>
	</header>
	<div class="container">
		<?php include "commute.php"; ?>
	</div>
</div>

<script src="js/challenges.js"></script>
<div id="challenges" class="page">
	<header class="page-title">
		<a href="#" class="page-title-a"><h1>Challenges</h1></a>
	</header>

	<div class="container">
		<?php include "challenges.php"; ?>
	</div>
</div><!-- end page -->


<div id="settings" class="page">
	<header class="page-title">
		<a href="#" class="page-title-a"><h1>Settings</h1></a>
	</header>
	<div class="container">
		<?php include "settings.php"; ?>
	</div>
</div><!-- end page -->

<?php include "bottom-nav.php"; ?>

<?php include "footer.php"; ?>