<?php
	session_start();
	include("connection.php");

	if (isset($_POST['Add'])) {

		$s_id = $_SESSION['id'];
        $cb_id = $_POST['cb_id'];
        $cb_name = $_POST['cb_name'];
		$s_name = $_POST['s_name'];

		$sql1 = "SELECT * FROM members WHERE s_id='$s_id' AND cb_id='$cb_id'";
		$qry1 = mysqli_query($conn, $sql1);
		$count = mysqli_fetch_array($qry1);

        if ((!empty($cb_id) && !empty($cb_name) && !empty($s_name)) && $count == 0) {

            $sql = "INSERT INTO `members`(`s_id`, `cb_id`, `cb_name`, `s_name`) 
                    VALUES ('$s_id','$cb_id','$cb_name','$s_name')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "You have successfully joined "  .$cb_name. "<br>";
            }
        }

        else {
            echo "You are already a member of " .$cb_name;
        }

	}

?>
