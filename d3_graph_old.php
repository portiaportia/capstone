<div id="d3Chart"></div>

<script>

var data = [3, 6, 2, 7, 5, 2, 1, 3, 8];
var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"];
/*
var new_data = [ 
	{ xval: "Jan", yval: 3 },
	{ xval: "Feb", yval: 6 },
	{ xval: "Mar", yval: 2 },
	{ xval: "Apr", yval: 7 },
	{ xval: "May", yval: 5 },
	{ xval: "Jun", yval: 2 },
	{ xval: "Jul", yval: 1 },
	{ xval: "Aug", yval: 3 },
	{ xval: "Sep", yval: 8 }
];
*/
var new_data = [ 
	{ xval: "a", yval: 3 },
	{ xval: "b", yval: 6 },
	{ xval: "c", yval: 2 },
	{ xval: "d", yval: 7 },
	{ xval: "e", yval: 5 },
	{ xval: "f", yval: 2 },
	{ xval: "g", yval: 1 },
	{ xval: "h", yval: 3 },
	{ xval: "i", yval: 8 }
];


//base the width on the width of the d3Chart
var w = parseInt(d3.select('#d3Chart').style('width'), 10);
var h = 150;
var margin = 15;

var maxY = d3.max(new_data, function(d) { return d.yval; });
var y = d3.scale.linear().domain([0, maxY]).range([0 + margin, h - margin]);
var x = d3.scale.linear().domain([0, new_data.length]).range([0 + margin, w - margin]);

var xScale = d3.scale.ordinal()
	.domain(new_data.map(function(d) {return d.xval; } ));

var xAxis = d3.svg.axis().scale(xScale)
	.orient("bottom");

//.orient("bottom").ticks(5);
//.tickFormat(d3.time.format("%Y-%m-%d"));
	/*

//scale this to the window
var margin = {top: 30, right: 10, bottom: 30, left: 10}
  , width = parseInt(d3.select('#d3Chart').style('width'), 10)
  , width = width - margin.left - margin.right
  , barHeight = 20
  , percent = d3.format('%');


var y = d3.scale.linear()
	.domain([0, d3.max(data)])
	.range([0, h]);

var xAxis = d3.svg.axis()
    .scale(x);
    //.tickFormat(percent);

// scales and axes
var x = d3.scale.linear()
    .domain([0, data.length])
    .range([0, width]); 
*/
var vis = d3.select("#d3Chart")
    .append("svg:svg")
    .attr("width", w)
    .attr("height", h);
 
var g = vis.append("svg:g")
    .attr("transform", "translate(0, 150)");

var line = d3.svg.line()
	.interpolate("basis")
    .x(function(d,i) { return x(i); })
    .y(function(d) { return -1 * y(d); });

//the data line
g.append("svg:path").attr("d", line(data));
/*
//the x axis (i think)
g.append("svg:line")
    .attr("x1", x(0))
    .attr("y1", -1 * y(0))
    .attr("x2", x(w))
    .attr("y2", -1 * y(0));
*/
// Add the X Axis
vis.append("g") 
	.attr("class", "x axis")
	.attr("transform", "translate(0," + 100 + ")")
	.call(xAxis);

 
//the y axis (i think)
g.append("svg:line")
    .attr("x1", x(0))
    .attr("y1", -1 * y(0))
    .attr("x2", x(0))
    .attr("y2", -1 * y(d3.max(data)));

/*
// the x-axis labels
g.selectAll(".xLabel")
    .data(x.ticks(5))
    .enter().append("svg:text")
    .attr("class", "xLabel")
    .text(String)
    .attr("x", function(d) { return x(d) })
    .attr("y", 0)
    .attr("text-anchor", "middle");
 */

 // the x-axis labels
g.selectAll(".xLabel")
    .data(x.ticks(5))
    .enter().append("svg:text")
    .attr("class", "xLabel")
    .text(String)
    .attr("x", function(d) { return x(d) })
    .attr("y", 0)
    .attr("text-anchor", "middle");

 // the y-axis labels
g.selectAll(".yLabel")
    .data(y.ticks(4))
    .enter().append("svg:text")
    .attr("class", "yLabel")
    .text(String)
    .attr("x", 0)
    .attr("y", function(d) { return -1 * y(d) })
    .attr("text-anchor", "right")
    .attr("dy", 4);


g.selectAll(".xTicks")
    .data(x.ticks(5))
    .enter().append("svg:line")
    .attr("class", "xTicks")
    .attr("x1", function(d) { return x(d); })
    .attr("y1", -1 * y(0))
    .attr("x2", function(d) { return x(d); })
    .attr("y2", -1 * y(-0.3));
 
g.selectAll(".yTicks")
    .data(y.ticks(4))
    .enter().append("svg:line")
    .attr("class", "yTicks")
    .attr("y1", function(d) { return -1 * y(d); })
    .attr("x1", x(-0.3))
    .attr("y2", function(d) { return -1 * y(d); })
    .attr("x2", x(0));    
</script>