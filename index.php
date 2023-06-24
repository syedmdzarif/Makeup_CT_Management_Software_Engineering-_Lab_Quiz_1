<?php
	require_once('dbconfig.php');
	$conn = mysqli_connect( HOST, USER, PASS, DB )
		or die("Unable to establish connection");


	$results = mysqli_query( $conn, "SELECT * FROM request_makeup" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>ID</th> <th>Name</th> <th>Missed Course</th> <th>CT Date</th> <th>Reason</th> <th>Status</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ID </td>";
		echo "<td> $Name </td>";
        echo "<td> $Missed_Course </td>";
		echo "<td> $CT_date </td>";
        echo "<td> $Reason </td>";
        echo "<td> $Status </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<br>";

    echo "<button> <a href = '#'> addrooking </a> </button>";
	echo "<button> <a href = '#'> cancelrequest </a> </button>";

?>