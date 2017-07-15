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

$StudentId = $_POST["studentid"];
$Name=$_POST['name'];
$Gender=$_POST['gender'];
$Age=$_POST['age'];
$Parental_Status=$_POST['parentalstatus'];
$Family_Type=$_POST['family'];
$Siblings=$_POST['sibling'];
$Birth_Order=$_POST['birth'];
$Parent_Education=$_POST['peducation'];
$Family_Income=$_POST['income'];
//INSERT INTO `demographics`(`SCID`, `STID`, `TID`, `SNAME`, `Gender`, `Age`, `ParentalStatus`, `FamilyType`, `Siblings`, `BirthOrder`, `ParentEducation`, `FamilyIncome`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])


$sql = "INSERT INTO demographics(SCID, STID, TID, SNAME, Gender, Age, ParentalStatus, FamilyType, Siblings, BirthOrder, ParentEducation, FamilyIncome)
values(100,$StudentId,100, '$Name','$Gender','$Age','$Parental_Status','$Family_Type','$Siblings','$Birth_Order','$Parent_Education','$Family_Income')";

echo $sql;
$result = $conn->query($sql);
 
?> 