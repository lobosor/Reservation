<?php

	session_start();
	require 'classes.php';
	
	$myBooking = unserialize($_SESSION['myBooking']);
	
	if(isset($_POST['destination']))
	$myBooking->destination = $_POST['destination'];

	echo "Your destination is ".$myBooking->destination;
	echo '<br />';
	
	$_SESSION['myBooking'] = serialize($myBooking);
	
?>