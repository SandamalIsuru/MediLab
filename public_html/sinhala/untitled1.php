<html lang="en">
 
<head>
 
    <link href="bootstrap.min.css" rel="stylesheet">
 
    <link href="justified-nav.css" rel="stylesheet">
 
    <script src="js/d3.v3.min.js" charset="utf-8"></script>
 
</head>
 
<body>
 
    <div class="container">
    	<?php
    	$name = "40";
		?>
		<script>
			var name='<?php echo $name; ?>';
		</script>
        <?php
		?>
 
        <div class="jumbotron">
        <script>
		
		
        	var data = [{
			"sale": name,
			"year": "2000"
			}, {
				"sale": "12.2",
				"year": "2001"
			}, {
				"sale": "12",
				"year": "2002"
			}, {
				"sale": "11.8",
				"year": "2003"
			}, {
				"sale": "13.5",
				"year": "2003"
			}, {
				"sale": "13.1",
				"year": "2010"
			}];
			
			var data2 = [{
				"sale": "42",
				"year": "2000"
			}, {
				"sale": "43",
				"year": "2002"
			}, {
				"sale": "45",
				"year": "2004"
			}, {
				"sale": "44",
				"year": "2006"
			}, {
				"sale": "46",
				"year": "2008"
			}, {
				"sale": "49",
				"year": "2010"
			}];
		</script>
        
        <svg id="visualisation" width="1000" height="500"></svg>
        <script>
			var vis = d3.select("#visualisation"),
			WIDTH = 1000,
			HEIGHT = 500,
			MARGINS = {
			top: 20,
			right: 20,
			bottom: 20,
			left: 50
    		},
			xScale = d3.scale.linear().range([MARGINS.left, WIDTH - MARGINS.right]).domain([2000,2010]),
			yScale = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([0,50]),
			
			xAxis = d3.svg.axis().scale(xScale),
  
			yAxis = d3.svg.axis().scale(yScale);
			
			vis.append("svg:g")
    .attr("transform", "translate(0," + (HEIGHT - MARGINS.bottom) + ")")
    .call(xAxis);
			
			/*vis.append("svg:g")
    .call(yAxis);*/
			
			//vis.append("svg:g").call(yAxis);
			
			yAxis = d3.svg.axis().scale(yScale).orient("left");
			
			vis.append("svg:g").attr("transform", "translate(" + (MARGINS.left) + ",0)").call(yAxis);
			
			var lineGen = d3.svg.line()
			  .x(function(d) {
				return xScale(d.year);
			  })
			  .y(function(d) {
				return yScale(d.sale);
			  });
			  
			  vis.append('svg:path')
			  .attr('d', lineGen(data))
			  .attr('stroke', 'green')
			  .attr('stroke-width', 2)
			  .attr('fill', 'none');
			  
			  vis.append('svg:path')
			  .attr('d', lineGen(data2))
			  .attr('stroke', 'blue')
			  .attr('stroke-width', 2)
			  .attr('fill', 'none');
			  
			  var lineGen = d3.svg.line()
				.x(function(d) {
					return xScale(d.year);
				})
				.y(function(d) {
					return yScale(d.sale);
				})
				.interpolate("basis");
				
				
				
			vis.append("svg:g")
				.attr("class","axis")
				.attr("transform", "translate(0," + (HEIGHT - MARGINS.bottom) + ")")
				.call(xAxis);
			 
			vis.append("svg:g")
				.attr("class","axis")
				.attr("transform", "translate(" + (MARGINS.left) + ",0)")
				.call(yAxis);
		</script>
        
        
        
        </div>
 
    </div>
 
</body>
 
</html>