<?php
include_once 'dbconfig.php';
if(isset($_POST['save']))
{
 $parname = $_POST['pname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $childname = $_POST['childname'];
 $grade = $_POST['grade'];
 $subject = $_POST['subject'];
 $demodate = $_POST['demodate'];

 $sql = "INSERT INTO `demo`(`pname`, `email`, `phone`, `childname`, `grade`, `subject`, `demodate`) VALUES ('$parname', '$email', '$phone', '$childname', '$grade', '$subject', '$demodate')";
 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>