<?php

$serverName = "localhost";
$DBUsername = "u33599p76268_Routr";
$DBPassword = "3F^;jaC9#v6<Ga%C";
$DBName = "u33599p76268_CKGame";

$connection = mysqli_connect($serverName, $DBUsername, $DBPassword, $DBName);

if (!$connection) {
	die("Connection failed: ".mysql_connect_error());
}