<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','guccms_db');

// get the post records
$txtName = $_POST['txtName'];
$txtDesignation = $_POST['txtDesignation'];
$txtPosition = $_POST['txtPosition'];
$txtEmail = $_POST['txtEmail'];
$txtMobile_Number = $_POST['txtMobile_Number'];
$txtBlood_Group = $_POST['txtBlood_Group'];

// database insert SQL code
$sql = "INSERT INTO moderators (Full_Name, Designation, Position, Email, Mobile_Number, Blood_Group ) VALUES ('$txtName', '$txtDesignation', '$txtPosition', '$txtEmail', '$txtMobile_Number', '$txtBlood_Group')";

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