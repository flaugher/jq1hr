<?php
	$fname = (isset($_POST['fname'])) ? $_POST['fname'] : "No first name given";
	$lname = (isset($_POST['lname'])) ? $_POST['lname'] : "No last name given";
	$response = 'Whatever';

	// Create an array we can use to output JSON
	$array = ['fname' => $fname, 'lname' => $lname, 'response' => $response];

	// Echo array in JSON format
	echo json_encode($array);
?>