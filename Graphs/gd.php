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
}   
$query=" SELECT Gender, Age FROM demographics GROUP BY Gender";
$result= $mysqli->query($query);

$arrData = array(
      "chart" => array(
          "caption" => "Data Visualization",
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


    $jsonEncodedData = json_encode($arrData);


	 $columnChart = new FusionCharts("Column2D", "myFirstChart" , 780, 400, "chart-1","jsonurl" ,"data/data.json");

	 $columnChart->render();


?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>

</body>
</html>