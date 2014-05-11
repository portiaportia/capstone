var data = [ 
	{ xval: "1-Dec-13", yval: 2 },
	{ xval: "1-Jan-14", yval: 3 },
	{ xval: "1-Feb-14", yval: 6 },
	{ xval: "1-Mar-14", yval: 8 },
	{ xval: "1-Apr-14", yval: 7 },
	{ xval: "1-May-14", yval: 8 }
];

//pass the name of the div that contains the graph
function buildChart(idName){
	var margin = {top: 30, right: 20, bottom: 30, left: 25};
	var w = parseInt(d3.select(idName).style('width'), 10);
	var h = w*.50;
	var width = w - margin.left - margin.right;
	var height = h - margin.top - margin.bottom;

	var parseDate = d3.time.format("%d-%b-%y").parse;

	//var x = d3.scale.linear().range([0, width]);
	var x = d3.time.scale().range([0, width]);
	var y = d3.scale.linear().range([height, 0]);

	var xAxis = d3.svg.axis().scale(x)
		.orient("bottom").ticks(6)
		.tickFormat(d3.time.format("%b"));

	var yAxis = d3.svg.axis().scale(y)
		.orient("left").ticks(4);

	var valueline = d3.svg.line()
		.interpolate("basis") //this curves the line. 
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(d.yval); });
	 
	var svg = d3.select(idName)
		.append("svg")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.append("g")
		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	x.domain(d3.extent(data, function(d) { return parseDate(d.xval); }));
	y.domain([0, d3.max(data, function(d) { return d.yval; })]);

	svg.append("path") // Add the valueline path.
		.attr("class", "line")
		.attr("d", valueline(data));

	svg.append("g") // Add the X Axis
		.attr("class", "x axis")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis);

	svg.append("g") // Add the Y Axis
		.attr("class", "y axis")
		.call(yAxis);
}

//pass the name of the div that contains the graph
function animateChart(idName){

	var margin = {top: 30, right: 20, bottom: 30, left: 25};
	var w = parseInt(d3.select(idName).style('width'), 10);
	var h = w*.50;
	var width = w - margin.left - margin.right;
	var height = h - margin.top - margin.bottom;

	var parseDate = d3.time.format("%d-%b-%y").parse;

	//var x = d3.scale.linear().range([0, width]);
	var x = d3.time.scale().range([0, width]);
	var y = d3.scale.linear().range([height, 0]);

	x.domain(d3.extent(data, function(d) { return parseDate(d.xval); }));
	y.domain([0, d3.max(data, function(d) { return d.yval; })]);
	
	var blankLine = d3.svg.line()
		.interpolate("basis") //this curves the line.
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(0); });

	var valueline = d3.svg.line()
		.interpolate("basis") //this curves the line.
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(d.yval); });

	var svg = d3.select(idName).select("svg").select("g");
	svg.select("path") // Add the valueline path.
		.attr("d", blankLine(data));

	svg.select("path") // Add the valueline path.
		.transition().duration(850)
		.attr("d", valueline(data));

		/*
		.transition()
			.delay(750)
			.duration(100)
			.styleTween("stroke", function() { return d3.interpolate("white", "red"); });
*/
	//reset the line to the bottom
	/*
	t1 = d3.select("#d3Chart").select("path").transition().duration(1000);
		t1.delay(750);
		t1.attr("d", valueline(data));
*/
/*
	t0 = d3.select("#d3Chart").select("path").transition().duration(1000);
		t0.delay(750);
		//t0.selectAll(".line").attr("d", line);
		t0.styleTween("stroke", function() { return d3.interpolate("white", "red"); });
		*/

}
