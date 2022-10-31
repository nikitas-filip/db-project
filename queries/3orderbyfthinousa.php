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
		
		$result = mysqli_query($con, "SELECT * FROM customer ORDER by LastName desc;");
		if($result === FALSE) { 
			die(mysqli_error($con)); 
		}
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
		
		while($row = mysqli_fetch_array($result)) 
		{
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
			echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);	
?>
<div style="margin:auto;">
		<h2 style="text-align:center;"><a href="Queries.html"><img src="Back.png" alt="Back" width="50px" height="50px"></a></h2>	
	</div>

</body>

</html>