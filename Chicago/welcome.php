<?php
	// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "friends";
$dbpass = "coffee";
$dbname = "friends";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = Trim(stripcslashes($_POST['Name']));
$major1 = Trim(stripcslashes($_POST['Major1']));
$major2 = Trim(stripcslashes($_POST['Major2']));
$class = Trim(stripcslashes($_POST['Class']));
$gender = Trim(stripcslashes($_POST['Gender']));


$query = "INSERT INTO friends (Name, Major1, Major2, Class, Gender) VALUES ('$name','$major1','$major2','$class','$gender')";
$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<meta >
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>

	<h1>Database Insert</h1>

	<?php echo $name; ?><br><br>

	<?php echo $major1; ?><br><br>

	<?php echo $major2; ?><br><br>

	<?php echo $class; ?><br><br>

	<?php echo $gender; ?>

</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
mysqli_close($connection);
?>