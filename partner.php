<html>
<body>

<?php

function lookupPartner($name) {

	$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720ss8ee', 'fall2014', 'cs4720ss8ee');
  	if (mysqli_connect_errno()) {
		echo "Connection Error!";
		return;
	}

	$stmt = $db_connection->stmt_init();
	if ($name == "*") {
		if($stmt->prepare("SELECT * FROM Partners")) {
			$stmt->bind_param("s", $name);
			$stmt->execute();
			$stmt->bind_result($ID, $name, $partner1, $partner2);

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
				echo "<td>" . $partner1 . "</td>";
				echo "<td>" . $partner2 . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	} else {
		if($stmt->prepare("SELECT * FROM Partners where name = '$name'")) {
			$stmt->bind_param("s", $name);
			$stmt->execute();
			$stmt->bind_result($ID, $name, $partner1, $partner2);

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
				echo "<td>" . $partner1 . "</td>";
				echo "<td>" . $partner2 . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}

}

lookupPartner($_GET["name"]);


?>

</body>
</html>

