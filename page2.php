<?php

	session_start();
	require 'classes.php';
	
	$myBooking = unserialize($_SESSION['myBooking']);
	
	echo $myBooking->people[0]->age;
	
	$_SESSION['myBooking'] = serialize($myBooking);

?>
