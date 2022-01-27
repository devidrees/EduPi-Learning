<?php
include_once 'dbconfig.php';
if(isset($_POST['save']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];
 $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name', '$email', '$subject','$phone', '$message')";
 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>