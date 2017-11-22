<html>
	<head>
		<title>Booking | Details</title>
		<link rel = "stylesheet" type = "text/css" href ="form.css" >
	</head>
	
	<body>
	
		<h1>Détails</h1>
		
		<p>
			Entrez le nom et l'age des passagers
		</p>
		
		<?php require 'view/v_error.php'; ?>
		
		<form method="post" action="index.php">	
		
			<p>
				<?php
					
					for($i = 0; $i<$myBooking->getNumberOfPassengers();$i++)
					{
											
						echo new Input("name".$i, "text", "Nom :");
						echo new Input("age".$i, "number", "Age :");
						echo '<br />';
					}					
					
				?>		
			</p>
			
			<input type="submit" name="index" value="Previous">
			<input type="submit" name="Confirm" value="Next">
			<input type="submit" name="Cancel" value="Cancel">
			
		</form>	
		
	</body>
</html>
