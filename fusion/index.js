<html>
<head>
<script src="fusioncharts.js"></script>
</head>
<body>
<?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// fusioncharts.php functions to help us easily embed the charts.
	include("fusioncharts.php");
?>

<?php
	 // Create the chart - Column 2D Chart with data given in constructor parameter
	 // Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
	 $columnChart = new FusionCharts("Column2D", "myFirstChart" , 780, 400, "chart-1", "jsonurl", "data.json");
	 // Render the chart
	 $columnChart->render();
?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>
</body>
</html>