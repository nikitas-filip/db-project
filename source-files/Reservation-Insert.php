	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$LicensePlate=$_GET['LicensePlate'];
		$StartDate=$_GET['StartDate'];
		$CustomerID=$_GET['CustomerID'];
		$FinishDate=$_GET['FinishDate'];
		$StartLocation=$_GET['StartLocation'];
		$FinishLocation=$_GET['FinishLocation'];
		$Paid=$_GET['Paid'];

		if ($LicensePlate==='' or $StartDate==='' or $CustomerID==='' or $FinishDate===''or $StartLocation==='' or $FinishLocation==='' or $Paid===''){
			header('Location:Reserves-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "INSERT INTO `reserves` (`LicensePlate`, `StartDate`, `CustomerID`, `FinishDate`, `StartLocation`, `FinishLocation`, `Paid`) VALUES
		('$LicensePlate', '$StartDate', $CustomerID, '$FinishDate', '$StartLocation', '$FinishLocation', $Paid)");

		if($result === FALSE) { 
			die(mysqli_error($con)); 
		}
		
		mysqli_close($con);
		
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