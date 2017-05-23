<html>
<body>

<?php

function addPartner($name, $encounter1, $encounter2) {

	$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720ss8ee', 'fall2014', 'cs4720ss8ee');
  	if (mysqli_connect_errno()) {
		echo "Connection Error!";
		return;
	}
	mysqli_query($db_connection,"INSERT INTO Encounters (name, Encounter1, Encounter2) VALUEs ('$name', '$encounter1', '$encounter2')");
}

	addPartner($_GET["name"], $_GET["encounter1"], $_GET["encounter2"]);
?>

</p>Success! Now you may go <a href=database.html>back</a> and check your new entries!</p>

</body>
</html>