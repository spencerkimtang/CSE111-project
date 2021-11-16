<?php
    session_start();
	include("connection.php");

    $clubName = $_GET['clubName'];
    $s_id = $_SESSION['id'];
    $cb_id = $_GET['cb_id'];

	$sql = "DELETE FROM `members` WHERE cb_id ='$cb_id' and s_id = '$s_id'";
    
    if ($qry = mysqli_query($conn, $sql)){
        echo "Successfully dropped: " .$clubName;
    }
    else {
        echo "Dropped  NOT successful: " .$clubName;
	}
?>