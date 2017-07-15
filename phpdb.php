<?php
$servername = "localhost";
$Student_Id = "$_POST['studentid']";
$Name="$_POST['name']";
$Gender="$_POST['gender']";
$Age="$_POST['age']";
$Parental_Status="$_POST['status']";
$Family_Type="$_POST['type']";
$Siblings="$_POST['menu1']";
$Birth_Order="$_POST['menu2']";
$Parent_Education="$_POST['menu3']";
$Family_Income="$_POST['income']";
$username="root";
$password="";
$dbname="learningcurve";
$conn = new mysqli($servername,$username, $password);
mysql_select_db($dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO detailsStudent (Student_Id,Name,Gender,Age,Parental_Status,Family_Type,Siblings,Birth_Order,Parent_Education,Family_Income)
VALUES ('$_POST(Student_Id)', '$_POST(Name)','$_POST(Gender)','$_POST(Age)',$_POST(Parental_Status)','$_POST(Family_Type)','$_POST(Siblings)','$_POST(Birth_Order)','$_POST(Parent_Education)','$_POST(Family_Income)');

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
