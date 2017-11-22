<?php
	
	//Update
	for($i=0; $i<$myBooking->getNumberOfPassengers(); $i++)
	{
		if(isset($_POST['name'.$i]) && $_POST['name'.$i]!="")
		{
			$myBooking->getPassenger($i)->setName($_POST['name'.$i]);
		}
		else 
		{
			$error['name'] = True;
		}
		
		if(isset($_POST['age'.$i]) && $_POST['age'.$i] > 0 && $_POST['age'.$i] <= 130)
		{
			$myBooking->getPassenger($i)->setAge($_POST['age'.$i]);
		}
		else 
		{
			$error['age'] = True;
		}
	}
	
	for ($i=0; $i<$myBooking->getNumberOfPassengers(); $i++)
	{
		$_maj=0;
		if ($_POST['age'.$i] >=18)
		{
			$_maj+=1;
		}
	}
	
	if ($_maj==0)
	{
		$error['majeur']=True;
	}
	
	
	//Display
	if(isset($error))
	{		
		require 'view/v_Details.php';
	}
	else
	{
		
		require 'view/v_Confirm.php';
	}
	
?>
