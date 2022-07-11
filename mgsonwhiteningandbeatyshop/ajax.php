<?php

	require('./../db.php');

	if (isset($_POST['id'])) {
		$id-$_POST['id'];

		$sql = "SELECT * FROM city where country_id = '$id' ";
		$result = $con->query($sql);

		while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$city = $row['city_name'];
			echo "<option value="$id">$city</option>";
		}
	}

?>