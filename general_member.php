<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','guccms_db');

// get the post records
$txtName = $_POST['txtName'];
$txtStudent_ID = $_POST['txtStudent_ID'];
$txtBatch = $_POST['txtBatch'];
$txtEmail = $_POST['txtEmail'];
$txtMobile_Number = $_POST['txtMobile_Number'];

// database insert SQL code
$sql = "INSERT INTO general_members (Full_Name, Student_ID, Batch, Email, Mobile_Number ) VALUES ('$txtName', '$txtStudent_ID', '$txtBatch', '$txtEmail', '$txtMobile_Number')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Congratulations! Welcome to GUCC Family";
}
else
{
    echo "Problem";
}

?>