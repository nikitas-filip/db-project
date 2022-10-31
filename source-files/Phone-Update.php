	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}
		
		$StoreID=$_GET['StoreID'];
		$PhoneNumber=$_GET['PhoneNumber'];
		
		if ($StoreID==='' or $PhoneNumber===''){
			header('Location:Phone-Insert.html');
			exit;
		}
		
		$result = mysqli_query($con, "UPDATE phonenum SET StoreID=$StoreID, PhoneNumber='$PhoneNumber' WHERE StoreID=$StoreID");
		
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
