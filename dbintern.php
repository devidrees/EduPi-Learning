<?php
include_once 'dbconfig.php';
if(isset($_POST['save']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $fathername = $_POST['fname'];
 $degree = $_POST['degree'];
 $course = $_POST['course'];
 $demodate = $_POST['demodate'];

 $sql = "INSERT INTO `intern`(`name`, `email`, `phone`, `fname`, `degree`, `course`, `demodate`) 
 VALUES ('$name', '$email', '$phone', '$fathername', '$degree', '$course', '$demodate')";
 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>