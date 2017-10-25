<?php
	
	//Update
	for($i=0; $i<$myBooking->numberOfPassengers; $i++)
	{
		if(isset($_POST['name'.$i])&&$_POST['name'.$i]!="")
		{
			$myBooking->passengers[$i]->setName($_POST['name'.$i]);
		}
		else if($_POST['name'.$i]=="")
		{
			$error['name'] = 1;
		}
		
		if(isset($_POST['age'.$i])&&$_POST['age'.$i]!=0)
		{
			$myBooking->passengers[$i]->age = $_POST['age'.$i];
		}
		else if($_POST['age'.$i]<=0)
		{
			$error['age'] = 1;
		}
		
		
	}
	
	//Display
	if(isset($error))
	{
		require 'view/v_step2.php';
	}
	else
	{
		require 'view/v_step3.php';
	}
	
?>