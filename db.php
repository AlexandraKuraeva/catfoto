<?php

include "config_db.php";

$conn =  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	'Successful connection';
}
