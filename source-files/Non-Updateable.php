<!DOCTYPE html>
<html style="background-color:#f8f0e2;">

<head>

	<title>Non-Updateable</title>
	
	<link type="text/css" rel="stylesheet" href="styletable.css"/>

</head>

<body>

	<div style="margin:auto;">

	<h1 style="text-align:center;color:#77419b;font-family:Lucida Handwriting;color:darkred;"><strong>Non-Updateable : Payments Greater Than 100$</strong></h1>
	
	</div>
		<?php
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$result=mysqli_query($con,"SELECT * FROM payment");
		if($result === FALSE) { 
			die(mysqli_error($con));
		}
		
		echo "<table align='center' >";
		echo "<tr>";
		echo "<td>";echo "<strong>";echo "LicensePlate";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "PaymentAmount";echo "</strong>";echo "</td>"; 
		echo "<td>";echo "<strong>";echo "PaymentMethod";echo "<strong>";echo "</td>"; 
		echo "</tr>";
		
			while($row = mysqli_fetch_array($result)) 
			{
				echo "<tr>";
				echo "<td>";
				echo $row['LicensePlate'];
				echo "</td>";
				echo "<td>";
				echo $row['PaymentAmount'];
				echo "</td>";
				echo "<td>";
				echo $row['PaymentMethod'];
				echo "</tr>";

			}
		echo "</table>";
		mysqli_close($con);
?>
	<br>
	<div style="margin:auto;">
		<h2 style="text-align:center;"><a href="Views.html"><img src="Back.png" alt="Back" width="50px" height="50px"></a></h2>	
	</div>

</body>

</html>