<!DOCTYPE html>
<html>

<head>
	<title>Insert Page Sadhika K061</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "registration");

		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}

		$Name = $_REQUEST['Name'];
    $Age = $_REQUEST['Age'];
    $Ph_No = $_REQUEST['Ph_No'];
    $Email = $_REQUEST['Email'];
		$College = $_REQUEST['College'];
    $Branch = $_REQUEST['Branch'];
    $Event_Name = $_REQUEST['EventName'];

		$sql = "INSERT INTO registration_details VALUES ('$Name', '$Age','$Ph_No','$Email','$College','$Branch','$Event_Name')";

		mysqli_close($conn);
		?>
	</center>
</body>

</html>
