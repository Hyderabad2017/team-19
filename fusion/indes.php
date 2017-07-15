<html>
<head>
<script src="fusioncharts.js"></script>
</head>
<body>
<?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// fusioncharts.php functions to help us easily embed the charts.
	include("fusioncharts.php");
	$db_username = 'root';
$db_password = '';
$db_name = 'learningcurve';
$db_host = 'localhost';
          
//connect to MySql            
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name); 

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
} else echo "qwertylol";    
$query=" SELECT Gender, Age FROM demographics GROUP BY Gender";
$result= $mysqli->query($query);
    		// output data of each row
    		// while($row = $result->fetch_assoc()) {
      //   		echo $row['Gender'];
      //   		echo $row['Age'];
    		// }
$arrData = array(
      "chart" => array(
          "caption" => "Top 10 Most Populous Countries",
          "paletteColors" => "#0075c2",
          "bgColor" => "#ffffff",
          "borderAlpha"=> "20",
          "canvasBorderAlpha"=> "0",
          "usePlotGradientColor"=> "0",
          "plotBorderAlpha"=> "10",
          "showXAxisLine"=> "1",
          "xAxisLineColor" => "#999999",
          "showValues" => "0",
          "divlineColor" => "#999999",
          "divLineIsDashed" => "1",
          "showAlternateHGridColor" => "0"
        )
    );

    $arrData["data"] = array();

    // Push the data into the array
    while($row = $result->fetch_assoc()) {
    	echo $row["Gender"];
      array_push($arrData["data"], array(
          "label" => $row["Gender"],
          "value" => $row["Age"]
          )
      );
    }
 // $arrData = array(
 //                "chart" => array(
 //                    "caption"=> "Split of visitors by age group",
 //                    "subCaption"=> "Last year",
 //                    "enableSmartLabels"=> "0",
 //                    "showPercentValues"=> "1",
 //                    "showLegend"=> "1",
 //                    "decimals"=> "1",
 //                    "theme"=> "zune"
 //                )
 //            );
 //            /*
 //                The data to be plotted on the chart is stored in the `$actualData` array in the key-value form.
 //            */
 //            $actualData = array(
 //                "Teenage" => 1250400,
 //                "Adult" => 1463300,
 //                "Mid-age" => 1050700,
 //                "Senior" => 491000
 //            );

    /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

    $jsonEncodedData = json_encode($arrData);
    echo $jsonEncodedData;

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

	 // Create the chart - Column 2D Chart with data given in constructor parameter
	 // Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
	 $columnChart = new FusionCharts("Column2D", "myFirstChart" , 780, 400, "chart-1","json" ,$jsonEncodedData);
	 //,json_encode($arrData));
	 // Render the chart
	// $columnChart.setJSOND
	 $columnChart->render();
?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>
</body>
</html>