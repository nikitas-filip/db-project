	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}

		$LicensePlate=$_GET['LicensePlate'];

		if ($LicensePlate===''){header('Location:Vehicle-Delete.html');exit;}
		$LicensePlate=" LicensePlate='$LicensePlate'";

		$result = mysqli_query($con, "DELETE FROM vehicle WHERE ".$LicensePlate);
		if($result === FALSE) {
			die(mysqli_error($con)); 
		}

		mysqli_close($con);
		$link = 'Vehicle-Delete.html';
	?>	
	
<html style="background-color:#f8f0e2;">
<head>
	<title>Redirecting</title>
</head>
<body>
		<meta http-equiv="refresh" content="2; url=main.html" />
		<h1 align="center" style="color:darkred;font-size=200px;font-family:Lucida Handwriting;"><strong>Redirecting you in 3 seconds...</strong></h1>
</body>
</html>