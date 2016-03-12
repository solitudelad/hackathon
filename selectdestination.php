<?php

if(session_status() != PHP_SESSION_ACTIVE)
                    session_start();

$temp = $_GET['link'];

echo $temp;
require 'connection.php';

$sql = 'select * from routeMaster where routeId = "'.$temp.'"';
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

print_r($row);

?>