<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','guccms_db');

// get the post records
$txtName = $_POST['txtName'];
$txtStudent_ID = $_POST['txtStudent_ID'];
$txtBatch = $_POST['txtBatch'];
$txtExecutive_position = $_POST['txtExecutive_position'];
$txtEmail = $_POST['txtEmail'];
$txtMobile_Number = $_POST['txtMobile_Number'];
$txtGM_ID = $_POST['txtGM_ID'];

// database insert SQL code
$sql = "INSERT INTO executive_members (Full_Name, Student_ID, Batch, Executive_position, Email, Mobile_Number, GM_ID ) VALUES ('$txtName', '$txtStudent_ID', '$txtBatch', '$txtExecutive_position', '$txtEmail', '$txtMobile_Number', '$txtGM_ID' )";
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