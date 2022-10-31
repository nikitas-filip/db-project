	<?php	
		$con = mysqli_connect("localhost:3306","root","project","project");
		if (mysqli_connect_errno())
		{
			die('Could not connect: ' . mysqli_error($con));
		}

		$IRS_Num=$_GET['IRS_Num'];
		$StoreID=$_GET['StoreID'];
		$StartDate=$_GET['StartDate'];

		if ($IRS_Num==='' or $StoreID==='' or $StartDate===''){header('Location:Work-Delete.html');exit;}
		$IRS_Num=" IRS_Num=".$IRS_Num;
		$StartDate=" StartDate='$StartDate'";
		$StoreID=" StoreID='$StoreID'";
		$result = mysqli_query($con, "DELETE FROM works WHERE ".$IRS_Num." AND".$StartDate." AND".$StoreID);
		if($result === FALSE) {
			die(mysqli_error($con)); 
		}

		mysqli_close($con);
		$link = 'Work-Delete.html';
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