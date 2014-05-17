
  
  var xMonths = [ //only used for the dates right
  { xval: "1-Dec-13", bus: 2, car: 4, bike: 6, walk: 1 },
  { xval: "1-Jan-14", bus: 2, car: 4, bike: 6, walk: 10 },
  { xval: "1-Feb-14", bus: 2, car: 4, bike: 6, walk: 10 },
  { xval: "1-Mar-14", bus: 2, car: 4, bike: 5, walk: 6 }, 
  { xval: "1-Apr-14", bus: 2, car: 4, bike: 5, walk: 6 },
  { xval: "1-May-14", bus: 2, car: 4, bike: 5, walk: 6 }  
  
]
    var barData = [
      [ //series 1 - car
        { x:0, y:4, y0:0}, //first bar, first series
        { x:1, y:4, y0:0}, //second bar, first series
        { x:2, y:4, y0:0}, //third bar, first series
        { x:3, y:4, y0:0}, //fourth bar, first series
        { x:4, y:4, y0:0}, //fourth bar, first series
        { x:5, y:4, y0:0}, //fourth bar, first series
      ],
      [ //series 2 - bus
        { x:0, y:8, y0:0}, //first bar
        { x:1, y:4, y0:0},
        { x:2, y:10, y0:0},
        { x:3, y:10, y0:0},
        { x:4, y:4, y0:0}, //fourth bar, first series
        { x:5, y:4, y0:0}, //fourth bar, first series
      ],
      [//series 3 - walk
        { x:0, y:6, y0:0}, //first bar
        { x:1, y:6, y0:0},
        { x:2, y:6, y0:0},
        { x:3, y:5, y0:0},
        { x:4, y:4, y0:0}, //fourth bar, first series
        { x:5, y:4, y0:0}, //fourth bar, first series
      ],
      [//series 4 - bike
        { x:0, y:8, y0:0}, //first bar
        { x:1, y:9, y0:0},
        { x:2, y:7, y0:0},
        { x:3, y:6, y0:0},
        { x:4, y:4, y0:0}, //fourth bar, first series
        { x:5, y:4, y0:0}, //fourth bar, first series
      ]
    ];

    var classNames = ["car", "bus", "walk", "bike"];

function buildBarChart(idName){
    var n = barData.length; // number of bars per section, number of layers, number of modes/series
    var m = barData[0].length; //number of months (samples per layer)
/*
    var data = [[ 4,  4,  4,  4], //car
                [ 6,  6,  6,  5], //bike
                [ 1, 10, 10,  6]]; //walk
    
    // permute the data
    data = data.map(function(d) { return d.map(function(p, i) { return {x:i, y:p, y0:0}; }); });
    */
    var stack = d3.layout.stack()
      .offset("zero")
    
    var layers = stack(barData);

    var yGroupMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y; }); }),
    yStackMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y0 + d.y; }); });

  var margin = {top: 30, right: 5, bottom: 50, left: 5};
    var w = parseInt(d3.select(idName).style('width'), 10);
    var h = w*.60;
    var width = w - margin.left - margin.right;
    var height = h - margin.top - margin.bottom;

  var parseDate = d3.time.format("%d-%b-%y").parse;

  var x = d3.scale.ordinal()
      .domain(d3.range(m))
      .rangeRoundBands([0, width], .08);

  //this is only used when creating the x-axis, "x" is used for the actual graph.
  var xLabel = d3.scale.ordinal()
    .domain(xMonths.map(function(d) { return parseDate(d.xval); }))
    .rangeRoundBands([0, width], .08);

  var y = d3.scale.linear()
      .domain([0, yStackMax])
      .range([height, 0]);

  var xAxis = d3.svg.axis()
      .scale(xLabel)
      .tickSize(0)
      .tickPadding(6) //the space between axis and label
      .orient("bottom")
      .tickFormat(d3.time.format("%b"));

  var svg = d3.select(idName).append("svg")
      .attr("width", width + margin.left + margin.right)
      .attr("height", height + margin.top + margin.bottom)
      .attr("class", "barChart")
    .append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  var layer = svg.selectAll(".layer")
      .data(layers)
    .enter().append("g")
      .attr("class", function(d, i) { return "layer " + classNames[i]; });

      //build the normal rect 
   /*   
  var rect = layer.selectAll("rect")
      .data(function(d) { return d; })
    .enter().append("rect")
      .attr("x", function(d) { return x(d.x); })
      .attr("y", height)
      .attr("width", x.rangeBand())
      .attr("height", 0);
*/

  
/*
  rect.transition()
      .delay(function(d, i) { return i * 10; })
      .attr("y", function(d) { return y(d.y0 + d.y); })
      .attr("height", function(d) { return y(d.y0) - y(d.y0 + d.y); });
*/

//build a blank rect
  var rect = layer.selectAll("rect")
      .data(function(d) { return d; })
    .enter().append("rect")
      .attr("x", function(d) { return x(d.x); })
      .attr("y", 0)
      .attr("width", x.rangeBand())
      .attr("height", 0);
      
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  /* START LEGEND */
  var legend = svg.append("g")
    .attr("class", "legend")
    //.attr("y", height);
    .attr("transform", "translate(0," + (height+20) + ")");

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

 // d3.selectAll("input").on("change", change);

}

/*If the bars overlap the axis, it might be b/c of the height calc. 
It is based on the width and sometimes the initial width includes a scroll bar. 
Just started noticing this in the new firefox
*/
function animateBarChart(idName, isExpanded){
  if(!isExpanded){
    var n = barData.length; // number of bars per section, number of layers, number of modes/series
    var m = barData[0].length; //number of months (samples per layer)

    var stack = d3.layout.stack()
      .offset("zero")

    var layers = stack(barData);

    var yGroupMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y; }); }),
    yStackMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y0 + d.y; }); });

    var margin = {top: 30, right: 5, bottom: 50, left: 5};
    var w = parseInt(d3.select(idName).style('width'), 10);
    var h = w*.60;
    var width = w - margin.left - margin.right;
    var height = h - margin.top - margin.bottom;

    var x = d3.scale.ordinal()
      .domain(d3.range(m))
      .rangeRoundBands([0, width], .08);

    var y = d3.scale.linear()
    .domain([0, yStackMax])
    .range([height, 0]);

    //drop the bars to zero
    var rect = d3.select(idName).select(".barChart").select("g").selectAll(".layer");
    rect.selectAll('rect')
      .attr("y", height)
      .attr("height", 0);

    var rect = d3.select(idName).select(".barChart").select("g").selectAll(".layer").selectAll('rect');
    rect.transition().duration(850)
      .delay(function(d, i) { return i * 10; }) //this starts it from left to right
      .attr("y", function(d) { return y(d.y0 + d.y); })
      .attr("height", function(d) { return y(d.y0) - y(d.y0 + d.y); });
  }
}