<?php
	
	include_once 'dbc.php';

	$name = $_POST['name'];
	$familyname = $_POST['familyname'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$male = $_POST['male'];
	$date = $_POST['date'];
	$mar = $_POST['mar'];
	$residence = $_POST['residence'];
	$hobby = $_POST['hobby'];
	$books = $_POST['books'];
	$comment = $_POST['comment'];
	$email = $_POST['email'];
	$subscribe = $_POST['subscribe'];
	$level = $_POST['level'];
	

	$sql = "INSERT INTO personaldata (`id`, `name`, `familyname`, `sex`, `age`, `male`, `date_of_birth`, `mar_status`, `residence`, `hobby`, `books`, `comment`, `email`, `subscribe`, `level`) VALUES (NULL, '$name', '$familyname', '$sex', '$age', '$male', '$date', '$mar', '$residence', '$hobby', '$books', '$comment', '$email', '$subscribe', '$level');";

	mysqli_query($conn, $sql);

	header("Location: ../index.php?filled=success");

?>