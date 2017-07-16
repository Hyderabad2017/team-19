<?php
$db_username = 'root';
$db_password = '';
$db_name = 'learningcurve';
$db_host = 'localhost';

//connect to MySql 
$conn = new mysqli($db_host, $db_username, $db_password, $db_name); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
echo "Connected successfully";
}
$rows=$_POST["rows"];
for ($x = 0; $x < $rows; $x++) {
$StudentId = $_POST[(string)($x*10)."0"];
$Name=$_POST[(string)($x*10)."1"];
$Gender=$_POST[(string)($x*10)."3"];
$Age=$_POST[(string)($x*10)."2"];
$Parental_Status=$_POST[(string)($x*10)."4"];
$Family_Type=$_POST[(string)($x*10)."5"];
$Siblings=$_POST[(string)($x*10)."6"];
$Birth_Order=$_POST[(string)($x*10)."7"];
$Parent_Education=$_POST[(string)($x*10)."8"];
$Family_Income=$_POST[(string)($x*10)."9"];
$sql = "INSERT INTO demographics(SCID, STID, TID, SNAME, Gender, Age, ParentalStatus, FamilyType, Siblings, BirthOrder, ParentEducation, FamilyIncome)
values(100,$StudentId,100, '$Name','$Gender','$Age','$Parental_Status','$Family_Type','$Siblings','$Birth_Order','$Parent_Education','$Family_Income')";

//INSERT INTO `demographics`(`SCID`, `STID`, `TID`, `SNAME`, `Gender`, `Age`, `ParentalStatus`, `FamilyType`, `Siblings`, `BirthOrder`, `ParentEducation`, `FamilyIncome`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])
echo $sql;
$result = $conn->query($sql);
}
?> 