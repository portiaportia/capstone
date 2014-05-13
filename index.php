<?php include "header.php"; ?>
<?php //make sure the functions are available 
	include "build-leaderboard.php"; 
?>	
<div id="summary" class="page current">
	<?php include "summary.php"; ?>
</div>

<div id="commute" class="page home-view">
	<?php include "commute.php"; ?>
</div>

<div id="challenges" class="page">
	<div id="challenge-mode">
		<ul>
			<li><a href="#team-home" class="highlight">Team</a></li>
			<li><a href="#individual-home">Individual</a></li>
		</ul>
	</div>
    <div id="team-home" class="content currentContent">
        <?php include "challenge-team.php"; ?>
    </div>
	<?php build_team_pages($people_data, $new_team_data); ?>
	
	<div id="individual-home" class="content">
		<?php include "challenge-individual.php"; ?>
	</div>

</div><!-- end page -->


<div id="settings" class="page">
	<?php include "settings.php"; ?>
</div><!-- end page -->

<?php include "bottom-nav.php"; ?>

<?php include "footer.php"; ?>