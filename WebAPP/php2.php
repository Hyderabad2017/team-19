<?php
$db_username = 'root';
$db_password = '';
$db_name = 'learningcurve';
$db_host = 'localhost';
$conn = new mysqli($db_host, $db_username, $db_password, $db_name); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
echo "Connected successfully";
}
$StudentId = $_POST["name"];
$Gender=$_POST['gender'];
$Age=$_POST['age'];
$comment=$_POST['comment1']."\n";
 $IO=$_POST['io'];
 $DP=$_POST['dp'];
 $TI=$_POST['tl'];
 $MC=$_POST['mc'];
 $UI=$_POST['ui'];
 $OS=($IO+$DP+$TI+$MC+$UI)/5;
 $sql="INSERT INTO dlsas(SCID,STID,IO,DP,TI,MC,UI,OS,comment)values(100,'$StudentId','$IO','$DP','$TI','$MC','$UI','$OS','$comment');";
 echo $sql;
 $result = $conn->query($sql);
   ?>

