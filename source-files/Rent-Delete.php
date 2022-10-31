	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}

		$LicensePlate=$_GET['LicensePlate'];
		$StartDate=$_GET['StartDate'];
		if ($LicensePlate===''){header('Location:Rent-Delete.html');exit;}
		$LicensePlate=" LicensePlate='$LicensePlate'";
		$StartDate=" StartDate='$StartDate'";
		$result = mysqli_query($con, "DELETE FROM rents WHERE ".$LicensePlate." AND".$StartDate);
		
		if($result === FALSE) {
			die(mysqli_error($con)); 
		}

		mysqli_close($con);
		$link = 'Rent-Delete.html';
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