	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
	
		$IRS_Num=$_GET['IRS_Num'];
		$LastName=$_GET['LastName'];
		$FirstName=$_GET['FirstName'];
		$SSN=$_GET['SSN'];
		$Driver_License=$_GET['Driver_License'];
		$City=$_GET['City'];
		$Street=$_GET['Street'];
		$StreetNum=$_GET['StreetNum'];
		$PostalCode=$_GET['PostalCode'];

		if ($IRS_Num==='' or $LastName==='' or $FirstName==='' or $SSN==='' or $Driver_License==='' or $City==='' or $Street==='' or $StreetNum==='' or $PostalCode===''){
			header('Location:Employee-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "INSERT INTO `employee` (`IRS_Num`, `SSN`, `DriverLicense`, `FirstName`, `LastName`, `Street`, `StreetNum`, `PostalCode`, `City`) VALUES ($IRS_Num, $SSN, $Driver_License, '$FirstName', '$LastName', '$Street', $StreetNum, $PostalCode,'$City')");
		
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
