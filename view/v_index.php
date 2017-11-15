<html>
	<head>
		<title>Resevation</title>
		<link rel = "stylesheet" type = "text/css" href ="form.css" >
	</head>
	
	<body>
		<h1>Reservation</h1>
		
		<p>
			Prix adulte: 15$. Prix enfant: 12$.
			Assurance: 20$.

		</p>
		
		<?php require 'view/v_error.php'; ?>
		
		<form method="post" action="index.php">
			<p>
				<?php
				
					echo new Input("destination","text","Destination : ", new Property("value", $myBooking->getDestination()));
					echo new Input("numberOfPassengers","number","Nombre de passagers : ", new Property("value", $myBooking->getNumberOfPassengers()));
					echo new Input("insurance", "checkbox", "Assurance", $myBooking->getInsurance());
				
				?>
				<!--
				<label for="destination">Destination : </label>
				<input id ="destination" type="text" name="destination">
				<br/>
				
				<label for="numberOfPassengers">Number of passengers : </label>
				<input id ="numberOfPassengers" type="number" name="numberOfPassengers" min=1>
				<br />
				
				<label for="insurance">Cancellation insurance : </label>
				<input id ="insurance" type="checkbox" name="insurance">
				-->
			</p>
			
			<input type="submit" name="Check" value="Next">
			<input type="submit" name="Cancel" value="Cancel">
			
		</form>
		
	</body>
	
</html>
