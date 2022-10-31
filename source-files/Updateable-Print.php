<!DOCTYPE html>
<html style="background-color:#f8f0e2;">

<head>

	<title>Print</title>
	
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>

</head>

<body>

	<div style="margin:auto;">

		<h1 style="text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;"><strong>Print</strong></h1>
	
	</div>

	<?php
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$result=mysqli_query($con,"SELECT * FROM customer_public");
		if($result === FALSE) { 
			die(mysqli_error($con));
		}
		
		echo "<table align='center' >";
		echo "<tr>";
		echo "<td>";echo "<strong>";echo "CustomerID";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "FirstName";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "LastName";echo "<strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "FirstRegistrationCity";echo "<strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "City";echo "<strong>";echo "</td>"; 
		echo "</tr>";
		
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>";
				echo $row['CustomerID'];
				echo "</td>";
				echo "<td>";
				echo $row['FirstName'];
				echo "</td>";
				echo "<td>";
				echo $row['LastName'];
				echo "</td>";
				echo "<td>";
				echo $row['FirstRegistrationCity'];
				echo "</td>";
				echo "<td>";
				echo $row['City'];
				echo "</td>";				
				echo "</tr>";
			}
		echo "</table>";
		mysqli_close($con);
	?>
	
	<div style="margin:auto;">
		<h2 style="text-align:center;"><a href="Updatable.html"><img src="Back.png" alt="Back" width="50px" height="50px"></a></h2>	
	</div>

</body>

</html>