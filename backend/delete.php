<?php 

	include 'database.php';

	$id = $_POST['id'];

	$link->query("DELETE FROM employee WHERE id = '".$id."'");