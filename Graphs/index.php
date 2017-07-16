<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <script src="fusioncharts.js"></script>
  <?php

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
?>

    <script type="text/javascript">


    </script>
  
</head>

<body>

<?php 
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

              while($row = $result->fetch_assoc()) {
                echo $row["Gender"];
                array_push($arrData["data"], array(
                    "label" => $row["Gender"],
                    "value" => $row["Age"]
                    )
                );
              }


              $jsonEncodedData = json_encode($arrData);

             $columnChart = new FusionCharts("Column2D", "myFirstChart" , 780, 400, "chart-1","json" ,"data.json");

             $columnChart->render();
          ?>
  <div id="chart-1"></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
