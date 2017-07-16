<!DOCTYPE html>
<html>
<head>
	<title>Retrieval</title>
</head>
<body>

	<?php
	include_once("config.php");


		$sql = "SELECT Question_no, Question_text FROM invquestion";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "No: " . $row["Question_no"]. " - Text: " . $row["Question_text"]."<br><br>";
    		}
		} else {
    		echo "0 results";
		}

		//For Base line analysis - display score for all parameters

		echo "For Base line analysis - display score for all parameters\n";

		$sql = "SELECT IO, DP, TI, MC, UI, OS FROM dlsas";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "IO: " . $row["IO"]. " - DP: " . $row["TI"]." - MC: ".$row["MC"]." - UI: ".$row["UI"]." - OS: ".$row["OS"]."<br><br>";
    		}
		} else {
    		echo "0 results";
		}

		//For Base line analysis - sort by student

		echo "For Base line analysis - sort by student\n";

		$sql = "SELECT IO, DP, TI, MC, UI, OS FROM dlsas Where STID = 19";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "SUM: " . ($row["IO"]+$row["TI"]+$row["MC"]+$row["UI"]+$row["OS"])."<br><br>";
    		}
		} else {
    		echo "0 results";
		}

		//For Base line analysis - sort by class

		echo "For Base line analysis - sort by class\n";

		$sql = "SELECT IO, DP, TI, MC, UI, OS FROM dlsas Where SCID = 1900";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "SUM: " . ($row["IO"]+$row["TI"]+$row["MC"]+$row["UI"]+$row["OS"])."<br><br>";
    		}
		} else {
    		echo "0 results";
		}

		//For Base line analysis - sort by age

		echo "For Base line analysis - sort by age\n";

		$sql = "SELECT IO, DP, TI, MC, UI, OS FROM dlsas natural join demographics Where Age = 18";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "SUM: " . ($row["IO"]+$row["TI"]+$row["MC"]+$row["UI"]+$row["OS"])."<br><br>";
    		}
		} else {
    		echo "0 results";
		}

	
	?>

	<button>Ret</button>


</body>
</html>