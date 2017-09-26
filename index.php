<?php

	session_start();
	require 'classes.php';

	$myself = new Person("Martin", "Durand", 12);
	$myBooking = new Booking;

	$myBooking->addPerson($myself);
	
	$_SESSION['myBooking'] = serialize($myBooking); 

?>

