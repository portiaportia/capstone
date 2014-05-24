var bonusesData = [ 
	//{ xval: "2/24/14", yval: 24 },
	{ xval: "3/10/14", yval: 24 },
	{ xval: "3/24/14", yval: 24 },
	{ xval: "4/7/14", yval: 22 },
	{ xval: "4/21/14", yval: 27 },
	{ xval: "5/5/14", yval: 30 },
	{ xval: "5/19/14", yval: 25 },
	{ xval: "6/2/14", yval: 42 }
];

var bonusesData1 = [ 
	{ xval: "2/24/14", yval: 24 },
	{ xval: "3/10/14", yval: 24 },
	{ xval: "3/24/14", yval: 24 },
	{ xval: "4/7/14", yval: 22 },
	{ xval: "4/21/14", yval: 27 },
	{ xval: "5/5/14", yval: 30 },
	{ xval: "5/19/14", yval: 25 }
];

var carbonData = [ 
	//{ xval: "2/24/14", yval: 39 },
	{ xval: "3/10/14", yval: 39 },
	{ xval: "3/24/14", yval: 39 },
	{ xval: "4/7/14", yval: 40 },
	{ xval: "4/21/14", yval: 42 },
	{ xval: "5/5/14", yval: 40 },
	{ xval: "5/19/14", yval: 30 },
	{ xval: "6/2/14", yval: 37 }
	
];

var carbonData1 = [ 
	{ xval: "2/24/14", yval: 39 },
	{ xval: "3/10/14", yval: 39 },
	{ xval: "3/24/14", yval: 39 },
	{ xval: "4/7/14", yval: 40 },
	{ xval: "4/21/14", yval: 42 },
	{ xval: "5/5/14", yval: 40 },
	{ xval: "5/19/14", yval: 30 }
	//{ xval: "6/2/14", yval: 37 }
];

var commuteData = [ 
	{ xval: "3/10/14", car: 12, bike: 0, bus: 8, walk: 0 }, 
	{ xval: "3/24/14", car: 10, bike: 0, bus: 8, walk: 2 }, 
	{ xval: "4/7/14", car: 12, bike: 0, bus: 6, walk: 2 }, 
	{ xval: "4/21/14", car: 8, bike: 2, bus: 6, walk: 4 }, 
	{ xval: "5/5/14", car: 4, bike: 4, bus: 7, walk: 5 }, 
	{ xval: "5/19/14", car: 0, bike: 8, bus: 7, walk: 5 }, 
	{ xval: "6/2/14", car: 0, bike: 8, bus: 6, walk: 6  } 
];

var commuteData1 = [ 
	{ xval: "2/24/14", car: 14, bike: 0, bus: 6, walk: 0 }, 
	{ xval: "3/10/14", car: 12, bike: 0, bus: 8, walk: 0 }, 
	{ xval: "3/24/14", car: 10, bike: 0, bus: 8, walk: 2 }, 
	{ xval: "4/7/14", car: 12, bike: 0, bus: 6, walk: 2 }, 
	{ xval: "4/21/14", car: 8, bike: 2, bus: 6, walk: 4 }, 
	{ xval: "5/5/14", car: 4, bike: 4, bus: 7, walk: 5 }, 
	{ xval: "5/19/14", car: 0, bike: 8, bus: 7, walk: 5 }
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
		.ticks(d3.time.monday, 2)
		.tickFormat(d3.time.format("%e"));

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
/*
	svg.append("g") // Add the X Axis for weeks
		.attr("class", "x axis weeks")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis2);
*/
	svg.append("g") // Add the X Axis months
		.attr("class", "x axis months")
		.attr("transform", "translate(0," + (height + 0)+ ")")
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
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(0); });

		var valueline = d3.svg.line()
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

function buildChartMulti(idName, data, dateToHighlight){
	
	var margin = getMargin();

	var w = getW(idName);
	var h = w*.60;
	var width = w - margin.left - margin.right;
	var height = h - margin.top - margin.bottom;

	var parseDate = d3.time.format("%x").parse;
	
	var x = getX(data, width, parseDate);
	var y = getY(data, height);
	
	var svg = d3.select(idName)
		.append("svg")
		.attr("width", width + margin.left + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.append("g")
		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	if(dateToHighlight == "5/19/14"){
		drawRect(svg, data, x, height, parseDate, dateToHighlight, "5/19 - 5/30");
	}else if(dateToHighlight == "6/2/14"){
		drawRect(svg, data, x, height, parseDate, dateToHighlight, "6/2 - 6/13");
	}

	//need to draw the lines, even though they aren't shown b/c it will append the paths
	drawLines(data, x, y, parseDate, svg, false, false);

	buildAxes(svg, x, y, height);

	buildLegend(svg, height);

	//drawVertLine(svg, x, y);

}

function drawRect(svg, data, x, height, parseDate, date, label){
    var num = data.length;
    var xval = x(parseDate(date))-5;
    //var xval = 45*num;
    var width = 10;

    //.x(function(d) { return x(parseDate(d.xval)); })
    

     svg.append("rect")
     	.attr("x", xval)
      	.attr("y", 0)
      	.attr("width", width)
      	.attr("height", height);
    
    svg.append("text")
    	.attr("x", xval-25)
      .attr("y", 9)
      .attr("height", 10)
      .attr("class", "pix-graphLabel")
      .text(label);
}

function drawVertLine(svg, x, y ){
	var line = {
    'x1':50,
    'y1':50,
    'x2':50,
    'y2':0
    };

	svg.append("line")
        .attr("x1", line.x1)
        .attr("y1", line.y1)
        .attr("x2", line.x2)
        .attr("y2", line.y2)
        .attr("class","label-line");
}

//pass the name of the div that contains the graph
function animateChartMulti(idName, data, isExpanded){
	if(!isExpanded){
		var margin = getMargin();

		var w = getW(idName);
		var h = w*.60;
		var width = w - margin.left - margin.right;
		var height = h - margin.top - margin.bottom;

		var parseDate = d3.time.format("%x").parse;
		
		var x = getX(data, width, parseDate);
		var y = getY(data, height);

		var svg = d3.select(idName).select("svg").select("g");
		
		//first zero out the lines		
		zeroOutLines(data, x, y, parseDate, svg);

		//now animate them
		animateLines(data, x, y, parseDate, svg);
	}
}

function zeroOutLines(data, x, y, parseDate, svg){
	drawLines(data, x, y, parseDate, svg, true, false);
}

function animateLines(data, x, y, parseDate, svg){
	drawLines(data, x, y, parseDate, svg, false, true);
}

function drawLines(data, x, y, parseDate, svg, makeZero, animate){
	if(makeZero){
		var blankLine = d3.svg.line()
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(0); });

		svg.select("path.car") // Add the valueline path.
			//.attr("class", "car")
			.attr("d", blankLine(data));

		svg.select("path.bike") // Add the valueline path.
			//.attr("class", "bike")
			.attr("d", blankLine(data));

		svg.select("path.walk") // Add the valueline path.
			//.attr("class", "walk")
			.attr("d", blankLine(data));

		svg.select("path.bus") // Add the valueline path.
			//.attr("class", "bus")
			.attr("d", blankLine(data));
	}else {

		//first line
		var valuelineCar = d3.svg.line()
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(d.car); });
		
		//second line
		var valuelineBike = d3.svg.line()
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(d.bike); });

		//third line
		var valuelineBus = d3.svg.line()
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(d.bus); });

		//fourth line
		var valuelineWalk = d3.svg.line()
			.x(function(d) { return x(parseDate(d.xval)); })
			.y(function(d) { return y(d.walk); });	

		if(animate){ 
			svg.select("path.car") // Add the valueline path.
				.transition().delay(500).duration(950)
				.attr("d", valuelineCar(data));

			svg.select("path.bike") // Add the valueline path.
				.transition().delay(550).duration(950)
				.attr("d", valuelineBike(data));

			svg.select("path.walk") // Add the valueline path.
				.transition().delay(650).duration(950)
				.attr("d", valuelineWalk(data));

			svg.select("path.bus") // Add the valueline path.
				.transition().delay(700).duration(950)
				.attr("d", valuelineBus(data));
		}else {
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
		}
	}
}

function getX(data, width, parseDate){
	var x = d3.time.scale().range([0, width]);
	x.domain(d3.extent(data, function(d) { return parseDate(d.xval); }));
	
	return x;
}

function getY(data, height){
	var y = d3.scale.linear().range([height, 0]);

	y.domain([0, getYMax(data)]);

	return y;
}

function getMargin(){
	return {top: 30, right: 20, bottom: 46, left: 25};
}
function getW(idName){
	
	//hacky way to make sure the line graphs are the same size.
	if(lineChartWidth == 0){
		var w = parseInt(d3.select(idName).style('width'), 10);
		lineChartWidth = w;
	}else {
		var w = lineChartWidth;
	}
	
	return w;
}

function buildAxes(svg, x, y, height){
	var xAxis = d3.svg.axis().scale(x)
		.orient("bottom")
		.ticks(d3.time.months, 1)
		.tickFormat(d3.time.format("%b"));

	var yAxis = d3.svg.axis().scale(y)
		.orient("left")
		.ticks(4);

	svg.append("g") // Add the X Axis
		.attr("class", "x axis")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis);

	svg.append("g") // Add the Y Axis
		.attr("class", "y axis")
		.call(yAxis);

}

function buildLegend(svg, height){

  	var legend = svg.append("g")
    	.attr("class", "legend")
    	.attr("transform", "translate(0," + (height+30) + ")");

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
}

function getYMax(data){
	//Figure out how high the y axis should go based on the max value. 
	var carmax  = d3.max(data, function(d) { return d.car; });
	var bikemax = d3.max(data, function(d) { return d.bike; });
	var busmax  = d3.max(data, function(d) { return d.bus; });
	var walkmax = d3.max(data, function(d) { return d.walk; });

	var ymax = carmax;
	if(ymax < bikemax) { ymax = bikemax; }
	if(ymax < busmax) { ymax = busmax; }
	if(ymax < walkmax) { ymax = walkmax; }

	return ymax;
}



