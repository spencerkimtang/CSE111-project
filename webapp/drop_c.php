<?php
	include("connection.php");

     $getName = $_GET['className'];
    // $getID = $_GET['sID'];

    echo $getName;
    echo $getID;

	$sql = "DELETE FROM takes WHERE c_number = `$getName` and s_id = '$getID'";
    $qry = mysqli_query($conn, $sql);
    
    if ($qry) {
        echo "Drop success";
		header("location: student.php");
	}
?>