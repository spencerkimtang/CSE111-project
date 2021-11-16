<?php
    session_start();
	include("connection.php");

    $s_id = $_SESSION['id'];
    $c_number = $_GET['c_number'];

	$sql = "DELETE FROM `takes` WHERE s_id='$s_id' and c_number='$c_number'";
    
    if ($qry = mysqli_query($conn, $sql)){
        echo "Successfully dropped: " .$c_number;
    }
    else {
        echo "Dropped NOT successful: " .$c_number;
	}
?>