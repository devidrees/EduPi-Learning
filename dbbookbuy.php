<?php
include_once 'dbconfig.php';
if(isset($_POST['save']))
{
 $b = $_POST['bookname'];
 $n = $_POST['name'];
 $p = $_POST['phone'];
 $a = $_POST['address'];
 $e = $_POST['email'];
 $c = $_POST['city'];
 $p = $_POST['pincode'];
 $l = $_POST['landmark'];
 $sql = "INSERT INTO `bookbuy`(`bookname`, `name`, `phone`, `address`, `email`, `city`,`pincode`,`landmark`) 
 VALUES ('$b', '$n', '$p','$a', '$e', '$c', '$p', '$l')";
 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>