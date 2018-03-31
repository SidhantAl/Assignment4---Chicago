<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "friends";
	$dbpass = "coffee";
	$dbname = "friends";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM friends";
	$result = mysqli_query($connection, $query);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Database Read</title>
</head>
<body>

	<h1>Table</h1>

	<table border>
		<tr>
			<th>Name</th>
			<th>Major 1</th>
			<th>Major 2</th>
			<th>Class year</th>
			<th>Gender</th>
		</tr>
		<?php
		// user returned data 
		while($data = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $data["Name"]; ?></td>
			<td><?php echo $data["Major1"]; ?></td>
			<td><?php echo $data["Major2"]; ?></td>
			<td><?php echo $data["Class"]; ?></td>
			<td><?php echo $data["Gender"]; ?></td>

		</tr>
		<?php } ?>
	</table>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>