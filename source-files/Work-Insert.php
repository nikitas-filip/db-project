	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$IRS_Num=$_GET['IRS_Num'];
		$StoreID=$_GET['StoreID'];
		$StartDate=$_GET['StartDate'];
		$FinishDate=$_GET['FinishDate'];
		$Position=$_GET['Position'];

		if ($IRS_Num==='' or $StoreID==='' or $StartDate==='' or $FinishDate==='' or $Position===''){
			header('Location:Works-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "INSERT INTO `works` (`IRS_Num`, `StoreID`, `StartDate`, `FinishDate`, `Position`) VALUES 
		($IRS_Num, $StoreID, '$StartDate', '$FinishDate', '$Position')");
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