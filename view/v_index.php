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
				<label for="destination">Destination : </label>
				<select name="destination" id="destination">
					<option value="Paris">Paris</option> 
					<option value="Amsterdam">Amsterdam</option> 
     				<option value="Lisbonne">Lisbonne</option> 
     			</select>
				<br/>

				
				<label for="numberOfPassengers">Number of passengers : </label>
				<input id ="numberOfPassengers" type="number" name="numberOfPassengers" min=1>
				<br/>
				
				<label for="insurance">Cancellation insurance : </label>
				<input id ="insurance" type="checkbox" name="insurance">
			</p>
			
			<input type="submit" name="Details" value="Next">
			<input type="submit" name="Cancel" value="Cancel">
			
		</form>
		
	</body>
	
</html>
