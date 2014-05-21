var bonusesData = [ 
	//{ xval: "2/24/14", yval: 24 },
	{ xval: "3/10/14", yval: 24 },
	{ xval: "3/24/14", yval: 24 },
	{ xval: "4/7/14", yval: 22 },
	{ xval: "4/21/14", yval: 27 },
	{ xval: "5/5/14", yval: 30 },
	{ xval: "5/19/14", yval: 25 },
	{ xval: "6/2/14", yval: 31 }
];

var carbonData = [ 
	//{ xval: "2/24/14", yval: 39 },
	{ xval: "3/10/14", yval: 39 },
	{ xval: "3/24/14", yval: 39 },
	{ xval: "4/7/14", yval: 40 },
	{ xval: "4/21/14", yval: 42 },
	{ xval: "5/5/14", yval: 40 },
	{ xval: "5/19/14", yval: 30 },
	{ xval: "6/2/14", yval: 35 }
	
];

var commuteData = [ 
	{ xval: "3/10/14", car: 3, bike: 7, bus: 30, walk: 2 }, //42
	{ xval: "3/24/14", car: 3, bike: 7, bus: 30, walk: 2 }, //42
	{ xval: "4/7/14", car: 4, bike: 8, bus: 22, walk: 3 }, //42
	{ xval: "4/21/14", car: 4, bike: 3, bus: 31, walk: 4 }, //42
	{ xval: "5/5/14", car: 6, bike: 12, bus: 20, walk: 3 }, //42
	{ xval: "5/19/14", car: 3, bike: 13, bus: 21, walk: 3 }, //42
	{ xval: "6/2/14", car: 3, bike: 13, bus: 18, walk: 6 } //
];

var classNames = ["car", "bus", "walk", "bike"];

var lineChartWidth = 0;

//pass the name of the div that contains the graph
function buildChart(idName, data){
	var margin = {top: 30, right: 20, bottom: 50, left: 25};
	//hacky way to make sure the line graphs are the same size.
	if(lineChartWidth == 0){
		var w = parseInt(d3.select(idName).style('width'), 10);
		lineChartWidth = w;
	}else {
		var w = lineChartWidth;
	}
	var h = w*.60;
	var width = w - margin.left - margin.right;
	var height = h - margin.top - margin.bottom;

	var parseDate = d3.time.format("%x").parse; //m/d/y

	//var x = d3.scale.linear().range([0, width]);
	//var x = d3.time.scale().range([0, width]);
	//var x = d3.time.scale.nice(d3.time.monday, 2);
	var x = d3.time.scale()
			.domain(d3.extent(data, function(d) { return parseDate(d.xval); } ))
			.range([0, width]);
			//.nice(d3.time.monday);

	var y = d3.scale.linear().range([height, 0]);

	var xAxis = d3.svg.axis().scale(x)
		.orient("bottom")
		//.ticks(d3.time.weeks, 2)
		//.tickValues(data, function(d) { return parseDate(d.xval);})
		.ticks(d3.time.months, 1)
		.tickFormat(d3.time.format("%b"));


	var xAxis2 = d3.svg.axis().scale(x)
		.orient("bottom")
		//.ticks(d3.time.weeks, 2)
		//.tickValues(data, function(d) { return parseDate(d.xval);})
		.ticks(d3.time.monday, 1)
		.tickFormat(d3.time.format("%e"));

/*
	var xAxis2 = d3.svg.axis().scale(x)
		.orient("bottom")
		.tickValues([1,2,3,4,5,6,7, 8]);
		*/

	var yAxis = d3.svg.axis().scale(y)
		.orient("left").ticks(4);

	var valueline = d3.svg.line()
		//.interpolate("basis") //this curves the line. 
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

	svg.append("g") // Add the X Axis for weeks
		.attr("class", "x axis weeks")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis2);

	svg.append("g") // Add the X Axis
		.attr("class", "x axis months")
		.attr("transform", "translate(0," + (height + 20)+ ")")
		.call(xAxis);

	


	svg.append("g") // Add the Y Axis
		.attr("class", "y axis")
		.call(yAxis);
}

//pass the name of the div that contains the graph
function animateChart(idName, data, isExpanded){
	if(!isExpanded){
		var margin = {top: 30, right: 20, bottom: 30, left: 25};
		var w = lineChartWidth;
		var h = w*.50;
		var width = w - margin.left - margin.right;
		var height = h - margin.top - margin.bottom;

		var parseDate = d3.time.format("%x").parse;

		var x = d3.time.scale().range([0, width]);
		var y = d3.scale.linear().range([height, 0]);

		x.domain(d3.extent(data, function(d) { return parseDate(d.xval); }));
		y.domain([0, d3.max(data, function(d) { return d.yval; })]);
		
		var blankLine = d3.svg.line()
			//.interpolate("basis") //this curves the line.
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(0); });

		var valueline = d3.svg.line()
			//.interpolate("basis") //this curves the line.
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

function buildChartMulti(idName, data){
	var margin = {top: 30, right: 20, bottom: 40, left: 25};
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

	var parseDate = d3.time.format("%x").parse;

	//var x = d3.scale.linear().range([0, width]);
	var x = d3.time.scale().range([0, width]);
	var y = d3.scale.linear().range([height, 0]);

	var xAxis = d3.svg.axis().scale(x)
		.orient("bottom")
		.ticks(d3.time.months, 1)
		.tickFormat(d3.time.format("%b"));

	var yAxis = d3.svg.axis().scale(y)
		.orient("left")
		.ticks(4);

	//first line
	var valuelineCar = d3.svg.line()
		//.interpolate("basis") //this curves the line. 
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(d.car); });
	
	//second line
	var valuelineBike = d3.svg.line()
		//.interpolate("basis") //this curves the line. 
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(d.bike); });

	//third line
	var valuelineBus = d3.svg.line()
		//.interpolate("basis") //this curves the line. 
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(d.bus); });

	//second line
	var valuelineWalk = d3.svg.line()
		//.interpolate("basis") //this curves the line. 
		.x(function(d) { return x(parseDate(d.xval)); })
		.y(function(d) { return y(d.walk); });	

	var svg = d3.select(idName)
		.append("svg")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.append("g")
		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	x.domain(d3.extent(data, function(d) { return parseDate(d.xval); }));
	//y.domain([0, d3.max(data, function(d) { return d.car; })]);
	var carmax  = d3.max(data, function(d) { return d.car; });
	var bikemax = d3.max(data, function(d) { return d.bike; });
	var busmax  = d3.max(data, function(d) { return d.bus; });
	var walkmax = d3.max(data, function(d) { return d.walk; });

	var ymax = carmax;
	if(ymax < bikemax) { ymax = bikemax; }
	if(ymax < busmax) { ymax = busmax; }
	if(ymax < walkmax) { ymax = walkmax; }

	y.domain([0, ymax]);

	/*
	var max = d3.max(d3.entries(data), function(d) {
    return d3.max(d3.entries(d.value), function(e) {
        return d3.max(e.value);
    });
});
*/

	svg.append("path") // Add the valueline path.
		.attr("class", "car")
		.attr("d", valuelineCar(data));
	
	svg.append("path") // Add the valueline path.
		.attr("class", "bike")
		.attr("d", valuelineBike(data));

		svg.append("path") // Add the valueline path.
		.attr("class", "walk")
		.attr("d", valuelineWalk(data));

		svg.append("path") // Add the valueline path.
		.attr("class", "bus")
		.attr("d", valuelineBus(data));

	svg.append("g") // Add the X Axis
		.attr("class", "x axis")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis);

	svg.append("g") // Add the Y Axis
		.attr("class", "y axis")
		.call(yAxis);

	/* START LEGEND */
  var legend = svg.append("g")
    .attr("class", "legend")
    .attr("transform", "translate(0," + (height+24) + ")");

  legend.selectAll('rect')
        .data(classNames)
      .enter()
        .append("rect")
        .attr("x", function(d, i) { return i * 50; })
        .attr("y", 0)
        .attr("width", 10)
        .attr("height", 10)
        .attr("class", function(d, i) { return classNames[i]; })
        
  legend.selectAll('text')
    .data(classNames)
    .enter()
      .append('text')
      .attr("x", function(d, i) { return (i * 50) + 12; })
      .attr("y", 9)
      .attr("height", 10)
      .attr("class", "pix-graphLabel")
      .text(function(d, i) { return classNames[i]; });

    /* END LEGEND */
}

//pass the name of the div that contains the graph
function animateChartMulti(idName, data, isExpanded){
	if(!isExpanded){
		var margin = {top: 30, right: 20, bottom: 30, left: 25};
		var w = lineChartWidth;
		var h = w*.50;
		var width = w - margin.left - margin.right;
		var height = h - margin.top - margin.bottom;

		var parseDate = d3.time.format("%x").parse;

		var x = d3.time.scale().range([0, width]);
		var y = d3.scale.linear().range([height, 0]);

		x.domain(d3.extent(data, function(d) { return parseDate(d.xval); }));
		y.domain([0, d3.max(data, function(d) { return d.yval; })]);
		
		var blankLine = d3.svg.line()
			//.interpolate("basis") //this curves the line.
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(0); });

		var valueline = d3.svg.line()
			//.interpolate("basis") //this curves the line.
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
