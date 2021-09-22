<?php 
	
	$mysqli = new mysqli("localhost", "root", "", "tesla");

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
	$id = $_POST['id']+1;


	$mysqli->query("UPDATE `project` SET `name` = '$name', `descr` = '$descr', `per` = '$per', `hour` = '$hour', `hoursec` = '$hoursec', `start` = '$start', `end` = '$end', `progress` = '$progress', `ind` = '$ind', `prior` = '$prior' WHERE `id` = '$id'");
	
	exit("<meta http-equiv='refresh' content='0; url=../index.php'>");



?>