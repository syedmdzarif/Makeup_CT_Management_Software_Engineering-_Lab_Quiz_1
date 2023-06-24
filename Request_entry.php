<?php

	$name = $_GET["Name"];
	$missed_course = $_GET["Missed_Course"];
    $ct_date = $_GET["CT_date"];
    $reason = $_GET["Reason"];
   
	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO request_makeup VALUES ( '', '$name', '$missed_course', '$ct_date', '$reason' , 'PENDING')" )

		or die("Can not execute query");

    echo "Record inserted";

    echo "<button> <a href = 'index.php'> Home </a> </button>";

?>