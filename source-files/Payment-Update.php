	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$StartDate=$_GET['StartDate'];
		$LicensePlate=$_GET['LicensePlate'];
		$PaymentAmount=$_GET['PaymentAmount'];
		$PaymentMethod=$_GET['PaymentMethod'];

		if ($StartDate==='' or $LicensePlate==='' or $PaymentAmount==='' or $PaymentMethod===''){
			header('Location:Payment-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "UPDATE paymenttransaction SET StartDate='$StartDate', LicensePlate='$LicensePlate', PaymentAmount=$PaymentAmount, PaymentMethod='$PaymentMethod' WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'");
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
