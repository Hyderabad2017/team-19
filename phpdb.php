<?php
$servername = "localhost";
$Student_Id = "$_POST['studentid']";
$Name="$_POST['name']";
$Gender="$_POST['gender']";
$Age="$_POST['age']";
$Parental_Status="$_POST['parentalstatus']";
$Family_Type="$_POST['type']";
$Siblings="$_POST['sibling']";
$Birth_Order="$_POST['birth']";
$Parent_Education="$_POST['peducation']";
$Family_Income="$_POST['income']";
$username="root";
$password="";
$dbname="learningcurve";
$conn = new mysqli($servername,$username, $password).die("do");
mysql_select_db($dbname);

$sql = "INSERT INTO detailsStudent (Student_Id,Name,Gender,Age,Parental_Status,Family_Type,Siblings,Birth_Order,Parent_Education,Family_Income)
VALUES ('$_POST(Student_Id)', '$_POST(Name)','$_POST(Gender)','$_POST(Age)',$_POST(Parental_Status)','$_POST(Family_Type)','$_POST(Siblings)','$_POST(Birth_Order)','$_POST(Parent_Education)','$_POST(Family_Income)');

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
