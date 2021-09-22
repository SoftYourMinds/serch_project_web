<?php

	$mysqli = new mysqli("localhost","root", "", "tesla");

	$name = $_POST['name'];
	$descr = $_POST['descr'];
	$per = $_POST['per'];
	$hour = $_POST['hour'];
	$hoursec = $_POST['hoursec'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$progress = $_POST['progress'];
	$ind = $_POST['ind'];
	$prior = $_POST['prior'];

	echo $name." ";
	echo $progress;

	$mysqli->query("INSERT INTO `project` (`id`, `name`, `descr`, `per`, `hour`, `hoursec`, `start`, `end`, `progress`, `ind`, `prior`) VALUES (NULL, '$name', '$descr', '$per', '$hour', '$hoursec', '$start', '$end', '$progress', '$ind', '$prior')");

	exit("<meta http-equiv='refresh' content='0; url=index.php'>");

?>