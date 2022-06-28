<?php
$link = mysqli_connect
	('localhost', 'INSERT','DATABASE','HERE');
if (!$link) {

	die('Could not connect to MySQL: ' . mysqli_error());
}
?>