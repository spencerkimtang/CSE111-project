<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$s_id = $_POST['s_id'];
		$c_number = $_POST['c_number'];

        if (!empty($s_id) && !empty($c_number)) {

            $sql = "INSERT INTO `takes`(`s_id`, `c_number`, `grade`) 
                    VALUES ('$s_id', '$c_number', 'NULL')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "insert success";
            }
        }

        else {
            echo "Must have Customer ID and Eqipment ID Filled";
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

			<input type = "text" name = "s_id" placeholder = 'Student ID'><br><br>
			<input type = "text" name = "c_number" placeholder = 'Course Name'><br><br>
			<input type = "submit" name = "Add" value = "insert">

		</form>
	</body>
</html>