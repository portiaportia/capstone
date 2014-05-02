<?php include "header.php"; ?>
<?php include "title.php"; ?>
<div id="home" class="page current">
	<?php include "top-nav.php"; ?>
	<div class="contentSection">
		<div id="today" class="content currentContent">	
			<h2>Today</h2>
			<p>Home Content</p>
			<p>Bonuses</p>
			<p>Charges</p>
			<p>Carbon Footprint</p>
			<p>Modes and the time taken</p>
		</div>	
		<div id="week" class="content">	
			<h2>This Week</h2>
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
		
		<div class="leaderboard">
<div class="dynamic_leaderboard">
</div>
			<section class="leader">
				<a href="#team-details">
					<p class="position">1</p>
					<img src="images/team1.png">
					<h1>Biking Barbies</h1>
					<div class="miles">
						<p>50 Miles</p>
						<p>18 Trips</p>
					</div>
				</a>
			</section>
			
			<section class="leader">
				<a href="#team-details">
					<p class="position">2</p>
					<img src="images/team2.png">
					<h1>Ninjas Riders</h1>
					<div class="miles">
						<p>46 Miles</p>
						<p>15 Trips</p>
					</div>
				</a>
			</section>
			
			<section class="leader">
				<a href="#team-details">
					<p class="position">3</p>
					<img src="images/team3.png">
					<h1>Colorful Cyclists</h1>
					<div class="miles">
						<p>38 Miles</p>
						<p>10 Trips</p>
					</div>
				</a>
			</section>
			
			<section class="leader my-team">
				<a href="#team-details">
					<p class="position">4</p>
					<img src="images/team4.png">
					<header>
                        <h1>Mobile Maniacs</h1>
                        <h2>4 Miles behind Colorful Cyclists</h2>
                    </header>
					<div class="miles">
						<p>32 Miles</p>
						<p>11 Trips</p>
					</div>
				</a>
			</section>
			
			<section class="leader">
				<a href="#team-details">
					<p class="position">5</p>
					<img src="images/team5.png">
					<h1>Tricksters</h1>
					<div class="miles">
						<p>31 Miles</p>
						<p>8 Trips</p>
					</div>
				</a>
			</section>
			
			<section class="leader">
				<a href="#team-details">
					<p class="position">6</p>
					<img src="images/team6.png">
					<h1>All Stars</h1>
					<div class="miles">
						<p>24 Miles</p>
						<p>11 Trips</p>
					</div>
				</a>
			</section>
		</div>

	</div>
	
	<div id="team-details" class="content">
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
				<p>Don't include the rank</p>
			</div>
		</section>
		
		<div class="leaderboard">
			<section class="leader">
            	<img src="images/person.png">
				<h1>Bryan Taylor</h1>
				<div class="miles">
						<p>16 Miles</p>
						<p>5 Trips</p>
					</div>
			</section>
			<section class="leader">
            	<img src="images/person.png">
				<h1>Jen Clark</h1>
				<div class="miles">
					<p>10 Miles</p>
					<p>3 Trips</p>
				</div>
			</section>
			<section class="leader my-row">
            	<img src="images/person.png">
				<h1>Samantha Walker</h1>
				<div class="miles">
					<p>4 Miles</p>
					<p>2 Trips</p>
				</div>
			</section>
			<section class="leader">
            	<img src="images/person.png">
				<h1>Mark Adams</h1>
				<div class="miles">
					<p>2 Miles</p>
					<p>1 Trips</p>
				</div>
			</section>
		</div>
	</div>

</div><!-- end page -->


<div id="route" class="page">

	<div class="one-content">

		<h2>Route</h2>

		<p>The Content</p>

	</div>

</div><!-- end page -->


<div id="settings" class="page">

	<div class="one-content">

		<h2>Settings</h2>

		<p>The Content</p>

	</div>

</div><!-- end page -->
<script>


	var w = window,
	d = document,
	e = d.documentElement,
	g = d.getElementsByTagName('body')[0],
	winx = w.innerWidth || e.clientWidth || g.clientWidth,
	winy = w.innerHeight|| e.clientHeight|| g.clientHeight;

    //this could be the size of the screen too, but not sure how to get the size of the body right now.
    winx = 300;

	var data_set = [ 
		{title: "Biking Barbies", miles: 12, trips: 18, image:"images/team1.png" } ,
		{title: "Ninja Riders", miles: 10, trips: 15, image:"images/team2.png" },
		{title: "Colorful Cylclists", miles: 15, trips: 15, image:"images/team3.png" }, 

	];

	data_set.sort(function(a,b) { return b.miles - a.miles});

	var maxMiles = d3.max(data_set, function(d) { return d.miles; });

	var x = d3.scale.linear()
	.domain([0, maxMiles])
	.range([20, (winx-20)]);

	var position = 1;

	var chrt_section = d3.select(".dynamic_leaderboard")
		.selectAll("section")
		.data(data_set)
		.enter().append("section")
		.attr("class", "leader")

	var chrt_a = chrt_section.append("a")
		.attr("href", "#team-details")

	chrt_a.append("p")
		.attr("class", "position")
		.text(function(d) { return position++})

	chrt_a.append("img")
		.attr("src", function(d) { return d.image; })

	chrt_a.append("h1")
	    .text(function(d) { return d.title; })

	var chrt_div = chrt_a.append("div")
	    .attr("class", "miles")

	chrt_div.append("p")
	    .text(function(d) { return d.trips + " Trips"})

	chrt_div.append("p")
	    .text(function(d) { return d.miles + " Miles"})

	chrt_a.append("div")
	    .attr("class", "bar")
		.style("background-color", "#d8eff8") //not needed, but good for learning.
		.style("width", function(d) { return x(d.miles) + "px"; })
		.text(function(d) { return d.miles + " miles"});

</script>
<?php include "bottom-nav.php"; ?>

<?php include "footer.php"; ?>