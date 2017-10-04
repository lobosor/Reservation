<?php
	
	//Update
	if(isset($_POST['destination'])&&$_POST['destination']!="")
	{
		$myBooking->destination = $_POST['destination'];
	}
	else if($myBooking->destination =="")
	{
		$error['destination'] = 1;
	}
	
	if(isset($_POST['numberOfPassengers'])&&$_POST['numberOfPassengers']>0)
	{		
		//Need further tests
		for($i =0; $i <$_POST['numberOfPassengers']; $i++)
		{
			if(!isset($myBooking->passengers[$i]))
			{
				$myBooking->addPerson(new Person("",0));
				$myBooking->numberOfPassengers++;
			}			
		}
		
		while($myBooking->numberOfPassengers > $_POST['numberOfPassengers'])
		{
			$myBooking->removePerson();
			$myBooking->numberOfPassengers--;
		}
	}
	else if ($myBooking->numberOfPassengers == 0)
	{
		$error['numberPeople'] = 1;
	}
	
	if(isset($_POST['insurance']))
	{
		$myBooking->insurance = "checked";
	}
	else
	{
		$myBooking->insurance = "";
	}
	
	//Display
	if(isset($error))
	{
		require 'view/v_error.php';
		require 'view/v_step1.php';
	}
	else
	{
		require 'view/v_step2.php';
	}
?>