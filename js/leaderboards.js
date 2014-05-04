var w = window,
	d = document,
	e = d.documentElement,
	g = d.getElementsByTagName('body')[0],
	winx = w.innerWidth || e.clientWidth || g.clientWidth,
	winy = w.innerHeight|| e.clientHeight|| g.clientHeight;

//this could be the size of the screen too, but not sure how to get the size of the body right now.
winx = 300;

var team_data_set = [ 
	{title: "Biking Barbies", miles: 50, trips: 18, image:"images/team1.png", loc:"#biking-barbies"} ,
	{title: "Ninja Riders", miles: 46, trips: 15, image:"images/team2.png" , loc:"#biking-barbies"},
	{title: "Colorful Cylclists", miles: 38, trips: 10, image:"images/team3.png" , loc:"#biking-barbies"}, 
	{title: "Mobile Maniacs", miles: 32, trips: 11, image:"images/team4.png" , loc:"#biking-barbies"},
	{title: "Tricksters", miles: 31, trips: 8, image:"images/team5.png" , loc:"#biking-barbies"}, 
	{title: "All Stars", miles: 15, trips: 8, image:"images/team6.png" , loc:"#biking-barbies"},
	{title: "Bob's Bikers", miles: 25, trips: 3, image:"images/team4.png" , loc:"#biking-barbies"} 
];

var me_others_data_set = [ 
	{title: "Biking Barbies", miles: 50, trips: 18, image:"images/person.png" } ,
	{title: "Ninja Riders", miles: 46, trips: 15, image:"images/person.png" },
	{title: "Colorful Cylclists", miles: 38, trips: 10, image:"images/person.png" }, 
	{title: "Mobile Maniacs", miles: 32, trips: 11, image:"images/person.png" },
	{title: "Tricksters", miles: 31, trips: 8, image:"images/person.png" }, 
];

var in_team_data_set = [ 
	{title: "Bryan Taylor", miles: 16, trips: 5, image:"images/person.png" } ,
	{title: "Jen Clark", miles: 10, trips: 3, image:"images/person.png" },
	{title: "Samantha Walker", miles: 4, trips: 2, image:"images/person.png" }, 
	{title: "Mark Adams", miles: 2, trips: 1, image:"images/person.png" },
];

var barbie_data_set = [ 
	{title: "Bryan Taylor", miles: 16, trips: 5, image:"images/person.png" } ,
	{title: "Jen Clark", miles: 10, trips: 3, image:"images/person.png" },
	{title: "Samantha Walker", miles: 4, trips: 2, image:"images/person.png" }, 
	{title: "Mark Adams", miles: 2, trips: 1, image:"images/person.png" },
];

buildLeaderBoard(team_data_set, ".team-leaderboard", true);
buildLeaderBoard(me_others_data_set, ".me-others-leaderboard", true);

buildIndividualTeamPage(barbie_data_set, "#biking-barbies", false);

buildProgressBar([{goal: 50, progress: 25}], "#biking-barbies");

function buildProgressBar(data_set, idPlace)
{
	var team_stats = d3.select(idPlace).select(".whole-team").select(".progress")
		.selectAll("div")
		.data(data_set)
		.enter()
		team_stats.append("p").text(function(d) { return "Goal Progress: " + d.progress + " of " + d.goal + " miles"; })
		team_stats.append("div").attr("class", "progress-bar")
			.style("width", function(d) { return ((d.progress/d.goal)*.95)*100 + "%"; })
		team_stats.append("div").attr("class", "progress-indicator")
		team_stats.append("div").attr("class", "goal-bar")
			.style("width", "95%")
		team_stats.append("div").attr("class", "goal-indicator")
			.style("left", "95%");

}

function buildIndividualTeamPage(data_set, idPlace, withLinks)
{	
	buildLeaderBoard(data_set, idPlace + " .in-team-leaderboard");
}

function buildLeaderBoard(data_set, classPlace, withLinks)
{
	//sort in rank of miles, most to least.
	data_set.sort(function(a,b) { return b.miles - a.miles});

	//determine the scale to use on the bars
	var maxMiles = d3.max(data_set, function(d) { return d.miles; });
	var x = d3.scale.linear()
	.domain([0, maxMiles])
	.range([20, (winx-20)]);

	//starting position
	var position = 1;

	//build out the leaderboard
	//TODO the stylying should go in the CSS instead.
	var chrt_section = d3.select(classPlace)
		.selectAll("section")
		.data(data_set)
		.enter().append("section")
		.attr("class", "leader")

	//only add an "a" if it makes sense to do so.
	if(withLinks){
		var chrt_a = chrt_section.append("a")
		.attr("href", function(d) { return d.loc; })
	}else{
		var chrt_a = chrt_section.append("div")
	}

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
		.text(function(d) { return d.trips + " Trips"; })

	chrt_div.append("p")
		.text(function(d) { return d.miles + " Miles"; });

	//chrt_a.append("div");
	   // .attr("class", "bar")
		//.style("background-color", "#d8eff8") //not needed, but good for learning.
		//.style("width", function(d) { return x(d.miles) + "px"; })
		//.text(function(d) { return d.miles + " miles"});
}