<?php
$link = mysqli_connect("<ip>:<port>", "<user>", "<password>");
//phpinfo();
$json_raw = file_get_contents("php://input");
$json = json_decode($json_raw);

$heading = $json->heading == '' ? 'NULL' : $json->heading;
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$sql = "INSERT INTO tracking_coords (tracking_number, lat, lon, accuracy, heading, timestamp, user_agent) VALUES ($json->tracking_number, $json->lat, $json->lon, $json->accuracy, $heading, $json->timestamp, '$user_agent')";
$result = mysqli_query($link, $sql);
mysqli_close($link);
?>