<?php
	if(isset($error))
	{
			echo '<div class="error"><p class="error">';
			
			if(isset($error['destination']))
			{
				echo 'Please enter a destination.<br/>';
			}
			
			if(isset($error['numberPeople']))
			{
				echo 'Please enter the number of passengers.<br/>';
			}
			
			if(isset($error['name']))
			{
				echo 'Please enter the name of all the passengers.<br/>';
			}
			
			if(isset($error['age']))
			{
				echo 'Please enter an age greater than 0 for all the passengers.<br/>';
			}
			
			echo '</p></div>';
	}		
?>