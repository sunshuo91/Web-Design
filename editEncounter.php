<html>
<body>

<?php

function editEncounter($name, $encounter1, $encounter2) {

	$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720ss8ee', 'fall2014', 'cs4720ss8ee');
  	if (mysqli_connect_errno()) {
		echo "Connection Error!";
		return;
	}

	mysqli_query($db_connection,"UPDATE Encounters SET Encounter1 ='$encounter1', Encounter2='$encounter2' WHERE name='$name'");
}

	editEncounter($_GET["name"], $_GET["encounter1"], $_GET["encounter2"]);



?>

</p>Success! Now you may go <a href=database.html>back</a> and check your new entries!</p>

</body>
</html>