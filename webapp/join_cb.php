<?php
	session_start();
	include("connection.php");

	if (isset($_POST['Add'])) {

		$s_id = $_SESSION['id'];
        $cb_id = $_POST['cb_id'];
        $cb_name = $_POST['cb_name'];
		$s_name = $_POST['s_name'];

        //to check if student isnt already a member of a club
		$sql1 = "SELECT * FROM members WHERE s_id='$s_id' AND cb_id='$cb_id'";
		$qry1 = mysqli_query($conn, $sql1);
        $count = mysqli_fetch_array($qry1);
        
        // to check if club is offered
		$sql2 = "SELECT * FROM clubs WHERE id='$cb_id'";
		$qry2 = mysqli_query($conn, $sql2);
		$offer = mysqli_fetch_array($qry2);

        if ((!empty($cb_id) && !empty($cb_name) && !empty($s_name)) && $count == 0 && $offer > 1) {

            $sql = "INSERT INTO `members`(`s_id`, `cb_id`, `cb_name`, `s_name`) 
                    VALUES ('$s_id','$cb_id','$cb_name','$s_name')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "You have successfully joined "  .$cb_name. "<br>";
            }
        }

        else {
            echo "You are already a member of " .$cb_name;
            echo " Or club doesn't exist at UCM";
        }

	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "cb_id" placeholder = 'Club ID'><br><br>
			<input type = "text" name = "cb_name" placeholder = 'Club Name'><br><br>
            <input type = "text" name = "s_name" placeholder = 'Your Name'><br><br>
            <input type = "submit" name = "Add" value = "JOIN">

		</form>
	</body>
</html>
