	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$Street=$_GET['Street'];
		$StreetNum=$_GET['StreetNum'];
		$PostalCode=$_GET['PostalCode'];
		$City=$_GET['City'];

		if ($Street==='' or $StreetNum==='' or $PostalCode==='' or $City===''){
			header('Location:Store-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "INSERT INTO `store` (`Street`, `StreetNum`, `PostalCode`, `City`) VALUES
		('$Street', $StreetNum, $PostalCode, '$City')");

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