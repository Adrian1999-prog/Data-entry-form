<?php
$Name = $_POST['Name'];
$Id_no = $_POST['Id_no'];
$Salary = $_POST['Salary'];
$Qualification = $_POST['Qualification'];
$Gender = $_POST['Gender'];
$Home_District = $_POST['Home_District'];

//DB connection
$conn = new mysqli('localhost', 'root','' ,'assignment');
if ($conn->connect_error) {
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into bio_data(Name, Id_no, Salary, Qualification, Gender, Home_District)values(?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("ssisss", $Name,$Id_no,$Salary,$Qualification,$Gender,$Home_District);
	$stmt->execute();
	echo "Bio-Data successfuly uploaded";
	$stmt->close();
	$conn->close();
}

?>