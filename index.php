<?php

	session_start();
	
	require 'classes.php';
	
	if(isset($_SESSION['reservation']))
	{
		$myBooking = unserialize($_SESSION['reservation']);
	}
	else
	{
		$myBooking = new Reservation();
	}
		
	
	foreach ($_POST as $page=>$value)
	{
		//Format the page name
		$page = 'controller/c_'.$page.'.php';
		
		if(is_file($page))
		{
			$pageLoaded = 1;
			require $page;
		}
	}
	
	if(!isset($pageLoaded))
	{
		require 'controller/c_index.php';
	}
	
	$_SESSION['reservation'] = serialize($myBooking);
?>
