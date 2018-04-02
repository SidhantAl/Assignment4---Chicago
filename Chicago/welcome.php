<?php
	// 1. Create a database connection
$dbhost = "localhost";
$dbuser = "urcscon3_chicag";
$dbpass = "coffee1N/!";
$dbname = "urcscon3_chicag";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = Trim(stripcslashes($_POST['name']));
$major1 = Trim(stripcslashes($_POST['major1']));
$major2 = Trim(stripcslashes($_POST['major2']));
$class = Trim(stripcslashes($_POST['class']));
$gender = Trim(stripcslashes($_POST['gender']));


$query = "INSERT INTO myTable (name, major1, major2, class, gender) VALUES ('$name','$major1','$major2','$class','$gender')";
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