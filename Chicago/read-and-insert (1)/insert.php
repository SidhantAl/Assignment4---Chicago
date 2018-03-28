<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "exercise9";
	$dbpass = "coffee";
	$dbname = "exercise9";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Usually this data would come from HTML form values in $_POST
	$insertData = "Hello there";
	
	// You really should escape all strings
	//$insertData = mysqli_real_escape_string($connection, $insertData);
	
	// 2. Perform database query
	$query  = "INSERT INTO myTable (myColumn) VALUES ('$insertData')";
	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Insert</title>
</head>
<body>

	<h1>Database Insert</h1>

<?php
	if ($result) {
		echo "Success! - the query didn't error-out";
?>
<?php
	} else {
		die("Database query failed.");
	}
?>
</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>