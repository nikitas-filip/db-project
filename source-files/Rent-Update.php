	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$LicensePlate=$_GET['LicensePlate'];
		$StartDate=$_GET['StartDate'];
		$StartLocation=$_GET['StartLocation'];
		$FinishLocation=$_GET['FinishLocation'];
		$FinishDate=$_GET['FinishDate'];
		$ReturnState=$_GET['ReturnState'];
		$CustomerID=$_GET['CustomerID'];
		$IRS_Num=$_GET['IRS_Num'];

		if ($LicensePlate==='' or $StartDate==='' or $StartLocation==='' or $FinishLocation==='' or $FinishDate==='' or $ReturnState==='' or $CustomerID==='' or $IRS_Num===''){
			header('Location:Rent-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "UPDATE rents SET LicensePlate='$LicensePlate', StartDate='$StartDate', StartLocation='$StartLocation', FinishLocation='$FinishLocation', FinishDate='$FinishDate', ReturnState='$ReturnState', CustomerID=$CustomerID, IRS_Num=$IRS_Num WHERE LicensePlate='$LicensePlate' AND StartDate='$StartDate'");

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
