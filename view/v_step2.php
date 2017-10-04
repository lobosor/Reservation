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
		
		<form method="post" action="index.php">	
		
			<p>
				<?php
					
					for($i = 0; $i<$myBooking->numberOfPassengers;$i++)
					{
						if(isset($myBooking->passengers[$i]->name))
						{
							$nameProperty = new Property("value", $myBooking->passengers[$i]->name);
						}
						else
						{
							$nameProperty = "";
						}

						if(isset($myBooking->passengers[$i]->age))
						{
							$ageProperty = new Property("value", $myBooking->passengers[$i]->age);
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