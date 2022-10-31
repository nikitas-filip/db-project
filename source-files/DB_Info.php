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
		
		$dd=$_POST['mydropdown'];
		$result = mysqli_query($con, "SELECT * FROM $dd");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$i=0;
		if ($dd=='customer'){
			echo"<div style=\"margin:auto;\">";

			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Customer</strong></h1>";
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "CustomerID";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "IRS_Num";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "LastName";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FirstName";echo "</strong>";echo "</td>"; 		
			echo "<td>";echo "<strong>";echo "SSN";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Driver_License";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "FirstRegistrationCity";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "StreetNum";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "PostalCode";echo "</strong>";echo "</td>"; 
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>"; echo $row['CustomerID']; echo "</td>";
			echo "<td>";echo $row['IRS_Num'];echo "</td>"; 
			echo "<td>";echo $row['LastName'];echo "</td>";
			echo "<td>";echo $row['FirstName'];echo "</td>"; 		
			echo "<td>";echo $row['SSN'];echo "</td>"; 
			echo "<td>";echo $row['Driver_License'];echo "</td>"; 
			echo "<td>";echo $row['FirstRegistrationCity'];echo "</td>"; 
			echo "<td>";echo $row['City'];echo "</td>"; 
			echo "<td>";echo $row['Street'];echo "</td>"; 
			echo "<td>";echo $row['StreetNum'];echo "</td>"; 
			echo "<td>";echo $row['PostalCode'];echo "</td>"; 
			echo "<tr>";
		}
			echo "</table>";
		}
		
		if ($dd=='emailaddress'){
			echo"<div style=\"margin:auto;\">";

			echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Email Address</strong></h1>";
			echo"</div>";
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "StoreID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "EmailAddress";echo "</strong>";echo "</td>";
	
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['StoreID'];echo "</td>";
				echo "<td>";echo $row['EmailAddress'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='employee'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Employee</strong></h1>";
	
			echo"</div>";		
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "IRS_Num";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "SSN";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "DriverLicense";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FirstName";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "LastName";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StreetNum";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "PostalCode";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>";






			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['IRS_Num'];echo "</td>";
				echo "<td>";echo $row['SSN'];echo "</td>";
				echo "<td>";echo $row['DriverLicense'];echo "</td>";
				echo "<td>";echo $row['FirstName'];echo "</td>";
				echo "<td>";echo $row['LastName'];echo "</td>";
				echo "<td>";echo $row['Street'];echo "</td>";
				echo "<td>";echo $row['StreetNum'];echo "</td>";
				echo "<td>";echo $row['PostalCode'];echo "</td>";
				echo "<td>";echo $row['City'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='fueltype'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Fuel Type</strong></h1>";
	
			echo"</div>";
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "LicensePlate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FuelType";echo "</strong>";echo "</td>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['LicensePlate'];echo "</td>";
				echo "<td>";echo $row['FuelType'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='paymenttransaction'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Payment Transacion</strong></h1>";
	
			echo"</div>";	
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "StartDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "LicensePlate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "PaymentAmount";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "PaymentMethod";echo "</strong>";echo "</td>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['StartDate'];echo "</td>";
				echo "<td>";echo $row['LicensePlate'];echo "</td>";
				echo "<td>";echo $row['PaymentAmount'];echo "</td>";
				echo "<td>";echo $row['PaymentMethod'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='phonenum'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Phone Numbers</strong></h1>";
	
			echo"</div>";			
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "StoreID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "PhoneNumber";echo "</strong>";echo "</td>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['StoreID'];echo "</td>";
				echo "<td>";echo $row['PhoneNumber'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='rents'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Rents</strong></h1>";
	
			echo"</div>";		
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "LicensePlate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StartDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StartLocation";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FinishLocation";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FinishDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "ReturnState";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "CustomerID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "IRS_Num";echo "</strong>";echo "</td>";

			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['LicensePlate'];echo "</td>";
				echo "<td>";echo $row['StartDate'];echo "</td>";
				echo "<td>";echo $row['StartLocation'];echo "</td>";
				echo "<td>";echo $row['FinishLocation'];echo "</td>";
				echo "<td>";echo $row['FinishDate'];echo "</td>";
				echo "<td>";echo $row['ReturnState'];echo "</td>";
				echo "<td>";echo $row['CustomerID'];echo "</td>";
				echo "<td>";echo $row['IRS_Num'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
				
		if ($dd=='reserves'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Reservations</strong></h1>";
	
			echo"</div>";		
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "LicensePlate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StartDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "CustomerID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FinishDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StartLocation";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FinishLocation";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Paid";echo "</strong>";echo "</td>";

			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['LicensePlate'];echo "</td>";
				echo "<td>";echo $row['StartDate'];echo "</td>";
				echo "<td>";echo $row['CustomerID'];echo "</td>";
				echo "<td>";echo $row['FinishDate'];echo "</td>";
				echo "<td>";echo $row['StartLocation'];echo "</td>";
				echo "<td>";echo $row['FinishLocation'];echo "</td>";
				echo "<td>";echo $row['Paid'];echo "</td>";

				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='store'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Store</strong></h1>";
	
			echo"</div>";
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "StoreID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StreetNum";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "PostalCode";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['StoreID'];echo "</td>";
				echo "<td>";echo $row['Street'];echo "</td>";
				echo "<td>";echo $row['StreetNum'];echo "</td>";
				echo "<td>";echo $row['PostalCode'];echo "</td>";
				echo "<td>";echo $row['City'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		if ($dd=='vehicle'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Vehicle</strong></h1>";
	
			echo"</div>";
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "LicensePlate";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Model";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Type";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Make";echo "</strong>";echo "</td>"; 		
			echo "<td>";echo "<strong>";echo "Year";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Kilometers";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "CC";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "HorsePower";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Damages";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "Malfunctions";echo "</strong>";echo "</td>"; 
			echo "<td>";echo "<strong>";echo "NextService";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "InsuranceExpDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "LastService";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StoreID";echo "</strong>";echo "</td>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>"; echo $row['LicensePlate']; echo "</td>";
			echo "<td>";echo $row['Model'];echo "</td>"; 
			echo "<td>";echo $row['Type'];echo "</td>";
			echo "<td>";echo $row['Make'];echo "</td>"; 		
			echo "<td>";echo $row['Year'];echo "</td>"; 
			echo "<td>";echo $row['Kilometers'];echo "</td>"; 
			echo "<td>";echo $row['CC'];echo "</td>"; 
			echo "<td>";echo $row['HorsePower'];echo "</td>"; 
			echo "<td>";echo $row['Damages'];echo "</td>"; 
			echo "<td>";echo $row['Malfunctions'];echo "</td>"; 
			echo "<td>";echo $row['NextService'];echo "</td>";
			echo "<td>";echo $row['InsuranceExpDate'];echo "</td>";
			echo "<td>";echo $row['LastService'];echo "</td>";
			echo "<td>";echo $row['StoreID'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		if ($dd=='works'){
			echo"<div style=\"margin:auto;\">";

				echo"<h1 style=\"text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;\"><strong>Works</strong></h1>";
	
			echo"</div>";
			
			echo "<table align = 'center'>";
			echo "<tr>";
			echo "<td>";echo "<strong>";echo "IRS_Num";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StoreID";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "StartDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "FinishDate";echo "</strong>";echo "</td>";
			echo "<td>";echo "<strong>";echo "Position";echo "</strong>";echo "</td>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";echo $row['IRS_Num'];echo "</td>";
				echo "<td>";echo $row['StoreID'];echo "</td>";
				echo "<td>";echo $row['StartDate'];echo "</td>";
				echo "<td>";echo $row['FinishDate'];echo "</td>";
				echo "<td>";echo $row['Position'];echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		mysqli_close($con);	
	?>
	
<div style="margin:auto;">
		<h2 style="text-align:center;"><a href="DB_info.html"><img src="Back.png" alt="Back" width="50px" height="50px"></a></h2>	
	</div>

</body>

</html>