<?php
$mysqli = new mysqli('24.143.222.18', 'urcscon3_chicag', 'coffee1N/!', 'urcscon3_chicag');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>
