<!DOCTYPE html>

<head>

	<title>Info</title>
	
	<link type="text/css" rel="stylesheet" href="styletable.css"/>
	<link rel="icon" href="favicon.png"/>
</head>

<body>
<?php
	// create a connection to the database with
		// mysql_connect(servername, username, password) function
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		// a database must be selected before a query is executed on it
		//mysql_select_db("project", $con) or die(mysqli_error($con));
		// execute an SQL statement with mysql_query(statement) function
		// storing the data returned in the $result variable
		
		$result = mysqli_query($con, "SELECT vehicle.Make As \"Manufactor\", vehicle.Year As \"Year\", vehicle.LicensePlate As \"License Plate\", fueltype.FuelType As \"Fuel Type\" FROM vehicle JOIN fueltype ON fueltype.LicensePlate = vehicle.LicensePlate WHERE vehicle.type = 'CAR';");
		if($result === FALSE) { 
			die(mysqli_error($con)); 
		}
		echo "<table align = 'center'>";
		echo "<tr>";
		echo "<td>";echo "<strong>";echo "Manufactor";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "Year";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "License Plate";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "Fuel Type";echo "</strong>";echo "</td>"; 
		echo "</tr>";
		
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>";echo $row['Manufactor'];echo "</td>"; 
			echo "<td>";echo $row['Year'];echo "</td>"; 
			echo "<td>";echo $row['License Plate'];echo "</td>"; 
			echo "<td>";echo $row['Fuel Type'];echo "</td>"; 
			echo "<tr>";
		}
		
		echo "</table>";
		mysqli_close($con);
	?>
	<div style="margin:auto;">
		<h2 style="text-align:center;"><a href="Queries.html"><img src="Back.png" alt="Back" width="50px" height="50px"></a></h2>	
	</div>

</body>

</html>