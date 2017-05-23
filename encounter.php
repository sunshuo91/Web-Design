<html>
<body>

<?php

function lookupEncounter($name) {

	$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720ss8ee', 'fall2014', 'cs4720ss8ee');
  	if (mysqli_connect_errno()) {
		echo "Connection Error!";
		return;
	}

	$stmt = $db_connection->stmt_init();
	if ($name == "*") {
		if($stmt->prepare("SELECT * FROM Encounters")) {
			$stmt->bind_param("s", $name);
			$stmt->execute();
			$stmt->bind_result($ID, $name, $Encounter1, $Encounter2);

			echo "<table border='1'>
			<tr>
			<th>ID</th>
			<th>Champion Name</th>
			<th>Best Partner</th>
			<th>Best Partner</th>
			</tr>";

			while($stmt->fetch()) {
				echo "<tr>";
				echo "<td>" . $ID . "</td>";
				echo "<td>" . $name . "</td>";
				echo "<td>" . $Encounter1 . "</td>";
				echo "<td>" . $Encounter2 . "</td>";
				echo "</tr>";
			}
		echo "</table>";
		}	
	} else {
		if($stmt->prepare("SELECT * FROM Encounters where name = '$name'")) {
			$stmt->bind_param("s", $name);
			$stmt->execute();
			$stmt->bind_result($ID, $name, $Encounter1, $Encounter2);

			echo "<table border='1'>
			<tr>
			<th>ID</th>
			<th>Champion Name</th>
			<th>Best Partner</th>
			<th>Best Partner</th>
			</tr>";

			while($stmt->fetch()) {
				echo "<tr>";
				echo "<td>" . $ID . "</td>";
				echo "<td>" . $name . "</td>";
				echo "<td>" . $Encounter1 . "</td>";
				echo "<td>" . $Encounter2 . "</td>";
				echo "</tr>";
			}
		echo "</table>";		
		}

	}
}

lookupEncounter($_GET["name"]);


?>

</body>
</html>

