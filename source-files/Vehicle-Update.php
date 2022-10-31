	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$LicensePlate=$_GET['LicensePlate'];
		$Model=$_GET['Model'];
		$Type=$_GET['Type'];
		$Make=$_GET['Make'];
		$Year=$_GET['Year'];
		$Kilometers=$_GET['Kilometers'];
		$CC=$_GET['CC'];
		$HorsePower=$_GET['HorsePower'];
		$Damages=$_GET['Damages'];
		$Malfunctions=$_GET['Malfunctions'];
		$NextService=$_GET['NextService'];
		$InsuranceExpDate=$_GET['InsuranceExpDate'];
		$LastService=$_GET['LastService'];
		$StoreID=$_GET['StoreID'];

		if ($LicensePlate==='' or $Model==='' or $Type==='' or $Make===''or $Year==='' or $Kilometers==='' or $CC==='' or $HorsePower==='' or $Damages==='' or $Malfunctions==='' or $NextService==='' or $InsuranceExpDate==='' or $LastService==='' or $StoreID===''){
			header('Location:Vehicle-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "UPDATE vehicle SET LicensePlate='$LicensePlate', Model='$Model', Type='$Type', Make='$Make', Year='$Year', Kilometers=$Kilometers, CC=$CC, HorsePower=$HorsePower, Damages='$Damages', Malfunctions='$Malfunctions', NextService='$NextService', InsuranceExpDate='$InsuranceExpDate', LastService='$LastService', StoreID=$StoreID WHERE LicensePlate='$LicensePlate'");

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