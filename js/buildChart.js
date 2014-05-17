var lineData = [ 
	{ xval: "1-Dec-13", yval: 2 },
	{ xval: "1-Jan-14", yval: 3 },
	{ xval: "1-Feb-14", yval: 6 },
	{ xval: "1-Mar-14", yval: 8 },
	{ xval: "1-Apr-14", yval: 7 },
	{ xval: "1-May-14", yval: 8 }
];

var bonusesData = [ 
	{ xval: "1-Dec-13", yval: 24 },
	{ xval: "1-Jan-14", yval: 22 },
	{ xval: "1-Feb-14", yval: 27 },
	{ xval: "1-Mar-14", yval: 30 },
	{ xval: "1-Apr-14", yval: 25 },
	{ xval: "1-May-14", yval: 31 }
];

var carbonData = [ 
	{ xval: "1-Dec-13", yval: 39 },
	{ xval: "1-Jan-14", yval: 40 },
	{ xval: "1-Feb-14", yval: 42 },
	{ xval: "1-Mar-14", yval: 40 },
	{ xval: "1-Apr-14", yval: 30 },
	{ xval: "1-May-14", yval: 35 }
];

var lineChartWidth = 0;
//pass the name of the div that contains the graph
function buildChart(idName, data){
	var margin = {top: 30, right: 20, bottom: 30, left: 25};
	//hacky way to make sure the line graphs are the same size.
	if(lineChartWidth == 0){
		var w = parseInt(d3.select(idName).style('width'), 10);
		lineChartWidth = w;
	}else {
		var w = lineChartWidth;
	}
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
function animateChart(idName, data, isExpanded){
	if(!isExpanded){
		var margin = {top: 30, right: 20, bottom: 30, left: 25};
		//var w = parseInt(d3.select(idName).style('width'), 10);
		var w = lineChartWidth;
		var h = w*.50;
		var width = w - margin.left - margin.right;
		var height = h - margin.top - margin.bottom;

		var parseDate = d3.time.format("%d-%b-%y").parse;

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
			.transition().delay(500).duration(950)
			.attr("d", valueline(data));
	}
}
