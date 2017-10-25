<html>
	<head>
		<title>Booking | Details</title>
		<link rel = "stylesheet" type = "text/css" href ="form.css" >
	</head>
	
	<body>
	
		<h1>Details</h1>
		
		<p>
			Please enter the name and age of the passengers.
		</p>
		
		<?php require 'view/v_error.php'; ?>
		
		<form method="post" action="index.php">	
		
			<p>
				<?php
					
					for($i = 0; $i<$myBooking->getNumberOfPassengers();$i++)
					{
						if($myBooking->getPassenger($i)->getName() !== null )
						{
							$nameProperty = new Property("value", $myBooking->getPassenger($i)->getName());
						}
						else
						{
							$nameProperty = "";
						}

						if($myBooking->getPassenger($i)->getAge() !== null)
						{
							$ageProperty = new Property("value", $myBooking->getPassenger($i)->getAge());
						}
						else
						{
							$ageProperty = "";
						}						
						
						echo new Input("name".$i, "text", "Name :", $nameProperty);
						echo new Input("age".$i, "number", "Age :", $ageProperty);
						echo '<br />';
					}					
					
				?>		
			</p>
			
			<input type="submit" name="step1" value="Previous">
			<input type="submit" name="step3" value="Next">
			<input type="submit" name="cancel" value="Cancel">
			
		</form>	
		
	</body>
</html>