<?php
	session_start();
	include("connection.php");
	$id = $_SESSION['id'];

	if (isset($_POST['Add'])) {

		$c_number = $_POST['c_number'];

		$sql1 = "SELECT * FROM takes WHERE s_id='$id' AND c_number='$c_number'";
		$qry1 = mysqli_query($conn, $sql1);
		$count = mysqli_fetch_array($qry1);

        if ((!empty($c_number)) && $count == 0) {

            $sql = "INSERT INTO `takes`(`s_id`, `c_number`, `grade`) 
                    VALUES ('$id', '$c_number', 'NULL')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "Successfully registered for " .$c_number;
			}
		}
        else {
            echo "You have already register for " .$c_number;
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

			<input type = "text" name = "c_number" placeholder = 'Course Name'><br><br>
			<input type = "submit" name = "Add" value = "Register">

		</form>
	</body>
</html>