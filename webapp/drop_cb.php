<?php
	include("connection.php");

    $cb_id = $_GET['cb_id'];
    $sID = $_GET['sID'];

    
	$sql = "DELETE FROM members WHERE cb_id = `.$cb_id` and s_id = '.$sID'";
    $qry = mysqli_query($conn, $sql);
    
    if ($qry) {
        echo "Successfully dropped" .$cb_id. "<br>";
		header("location: student.php");
	}
?>