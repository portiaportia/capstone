<?php include "header.php"; ?>
<?php include "title.php"; ?>
<div id="home" class="page current">
	<?php include "top-nav.php"; ?>
	<div class="contentSection">
		<div id="today" class="content currentContent">	
        	<section class="arrow-title">
                <a href="#yesterday" data-view="day-view"><img src="images/back-arrow.png"></a>
                <h2>Today</h2>
                <img src="images/front-arrow.png">
            </section>
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
        <div id="yesterday" class="content">	
        	<section class="arrow-title">
                <a href="#twodaysago" data-view="day-view"><img src="images/back-arrow.png"></a>
                <h2>Yesterday</h2>
                <a href="#today" data-view="day-view"><img src="images/front-arrow.png"></a>
            </section>
            <p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>	
        <div id="twodaysago" class="content">	
        	<section class="arrow-title">
                <a href="#today" data-view="day-view"><img src="images/back-arrow.png"></a>
                <h2>Two Days Ago</h2>
                <a href="#yesterday"data-view="day-view"><img src="images/front-arrow.png"></a>
            </section>
            <p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>		
		<div id="week" class="content">	
			<section class="arrow-title">
                <a href="#last-week" data-view="week-view"><img src="images/back-arrow.png"></a>
                <h2>This Week</h2>
                <a href="#week"data-view="week-view"><img src="images/front-arrow.png"></a>
            </section>
			<p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>
        <div id="last-week" class="content">	
			<section class="arrow-title">
                <a href="#two-weeks-ago" data-view="week-view"><img src="images/back-arrow.png"></a>
                <h2>Last Week</h2>
                <a href="#week"data-view="week-view"><img src="images/front-arrow.png"></a>
            </section>
			<p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>
        <div id="two-weeks-ago" class="content">	
			<section class="arrow-title">
                <a href="#week" data-view="week-view"><img src="images/back-arrow.png"></a>
                <h2>Two Weeks Ago</h2>
                <a href="#last-week"data-view="week-view"><img src="images/front-arrow.png"></a>
            </section>
			<p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>
		<div id="month" class="content">	
			<h2>This Month</h2>
			<p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>
	</div>
</div><!-- end page -->


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
    </div>
</div>
	
	<div id="biking-barbies" class="content team-details">
		<header>
			<a href="#team-home">
				<img src="images/arrow.png">
				<h2>All Teams</h2>
			</a>
		</header>
		
		<section class="whole-team">
			<img src="images/team4.png">
			<div class="team-stats">
				<h3>Mobile Maniacs</h3>
				<p>Fourth Place</p>
				<p><strong>Goal:</strong> Be awesome</p>
				<p><strong>Miles:</strong> 32</p>
				<p><strong>Trips:</strong> 11</p>
			</div>
			<div class="progress">
				
			</div>
		</section>
		
		<div class="in-team-leaderboard leaderboard">
			
		</div>
	</div>

</div><!-- end page -->


<div id="leaderboard" class="page">

	<div class="one-content">

		<h2>Leaderboard</h2>

		<div class="me-others-leaderboard leaderboard">
    	</div>

	</div>

</div><!-- end page -->


<div id="settings" class="page">

	<div class="one-content">

		<h2>Settings</h2>

		<p>The Content</p>

	</div>

</div><!-- end page -->
<script src="js/leaderboards.js"></script>
<?php include "bottom-nav.php"; ?>

<?php include "footer.php"; ?>