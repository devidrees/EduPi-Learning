<?php
include_once 'dbconfig.php';
if(isset($_POST['save']))
{
 $p = $_POST['pname'];
 $e = $_POST['email'];
 $a = $_POST['address'];
 $ph = $_POST['phone'];
 $c = $_POST['childname'];
 $g = $_POST['grade'];
 $m = $_POST['message'];
 $d = $_POST['demodate'];

 $sql = "INSERT INTO `hometuition`(`pname`, `email`, `address`, `phone`, `childname`, `grade`, `message`, `demodate`) 
 VALUES ('$p', '$e', '$a', '$ph', '$c', '$g', '$m', '$d')";
 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>