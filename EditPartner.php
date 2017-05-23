<html>
<body>

<?php

function editPartner($name, $partner1, $partner2) {

	$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720ss8ee', 'fall2014', 'cs4720ss8ee');
  	if (mysqli_connect_errno()) {
		echo "Connection Error!";
		return;
	}

	mysqli_query($db_connection,"UPDATE Partners SET partner1 ='$partner1', partner2='$partner2' WHERE name='$name'");
}

	editPartner($_GET["name"], $_GET["partner1"], $_GET["partner2"]);



?>

</p>Success! Now you may go <a href=database.html>back</a> and check your new entries!</p>

</body>
</html>